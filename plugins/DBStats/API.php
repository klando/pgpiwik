<?php
/**
 * Piwik - Open source web analytics
 * 
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html Gpl v3 or later
 * @version $Id$
 * 
 * @package Piwik_DBStats
 */

/**
 * 
 * @package Piwik_DBStats_API
 */
class Piwik_DBStats_API
{
	static private $instance = null;
	static public function getInstance()
	{
		if (self::$instance == null)
		{            
			$c = __CLASS__;
			self::$instance = new $c();
		}
		return self::$instance;
	}

 	static public function getDBStatus()
	{
		Piwik::checkUserIsSuperUser();
		$configDb = Zend_Registry::get('config')->database->toArray();
		// we decode the password. Password is html encoded because it's enclosed between " double quotes
		$configDb['password'] = htmlspecialchars_decode($configDb['password']);
		if(!isset($configDb['port']))
		{
			// before 0.2.4 there is no port specified in config file
			$configDb['port'] = '3306';  
		}
# FIXME add a sql fonction to postgresql to fetch something similar (the hit/miss ratio, bloat, toast ...)
		$link   = mysql_connect($configDb['host'], $configDb['username'], $configDb['password']);
		$status = mysql_stat($link);
		mysql_close($link);
		return $status;
	}
	
	static public function getTableStatus($table, $field = '') 
	{
		Piwik::checkUserIsSuperUser();
		$db = Zend_Registry::get('db');
		#FIXME pgsql table status mysql
		// http://dev.mysql.com/doc/refman/5.1/en/show-table-status.html
		#$tables = $db->fetchAll("SHOW TABLE STATUS LIKE ?", $table);
                $sql = 'select pg_relation_size(?) as "Data_length", ' .
                       '(select sum(pg_relation_size(a)) as "Index_length" ' .                       '        from (select indexname as a from pg_indexes where schemaname = ? and tablename = ?) as b ' .
                       '        ) as "Index_length", ' .
                       '(select reltuples from pg_class where relname=?) as "Rows" ' .
                       "'$table'" . ' as "Name"';
                $tables = $db->fetchAll($sql, array($table, $schema, $table, $table));

		if ($field == '')
		{
			return $tables[0];
		}
		else
		{
			return $tables[0][$field];
		}
	}

	static public function getAllTablesStatus() 
	{
		Piwik::checkUserIsSuperUser();
		$db = Zend_Registry::get('db');
		#FIXME pgsql table status mysql
		// http://dev.mysql.com/doc/refman/5.1/en/show-table-status.html
		$tablesPiwik =  Piwik::getTablesInstalled();
		$total = array('Name' => 'Total', 'Data_length' => 0, 'Index_length' => 0, 'Rows' => 0);
		$table = array();
		foreach($tablesPiwik as $tableName) 
		{
			$t = self::getTableStatus($tableName);
			$total['Data_length'] += $t['Data_length'];
			$total['Index_length'] += $t['Index_length'];
			$total['Rows'] += $t['Rows'];
			
			$t['Total_length'] = Piwik::getPrettySizeFromBytes($t['Index_length']+$t['Data_length']);
			$t['Data_length'] = Piwik::getPrettySizeFromBytes($t['Data_length']);
			$t['Index_length'] = Piwik::getPrettySizeFromBytes($t['Index_length']);
			$t['Rows'] = Piwik::getPrettySizeFromBytes($t['Rows']);
			$table[] = $t;
		}
		$total['Total_length'] = Piwik::getPrettySizeFromBytes($total['Data_length']+$total['Index_length']);
		$total['Data_length'] = Piwik::getPrettySizeFromBytes($total['Data_length']);
		$total['Index_length'] = Piwik::getPrettySizeFromBytes($total['Index_length']);
		$total['TotalRows'] = Piwik::getPrettySizeFromBytes($total['Rows']);
		$table['Total'] = $total;
		
		return $table;
	}
}
