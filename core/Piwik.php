<?php
/**
 * Piwik - Open source web analytics
 * 
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html Gpl v3 or later
 * @version $Id: Piwik.php 581 2008-07-27 23:07:52Z matt $
 * 
 * @package Piwik
 */

require_once "Config.php";
require_once "Zend/Db.php";
require_once "Zend/Db/Table.php";
require_once "Log.php";
require_once "Translate.php";

/**
 * Main piwik helper class.
 * Contains static functions you can call from the plugins.
 * 
 * @package Piwik
 */
class Piwik
{
	const CLASSES_PREFIX = "Piwik_";
	
	public static $idPeriods =  array(
			'day'	=> 1,
			'week'	=> 2,
			'month'	=> 3,
			'year'	=> 4,
		);
	
	/**
	 * Checks that the directories Piwik needs write access are actually writable
	 * Displays a nice error page if permissions are missing on some directories
	 * 
	 * @return void
	 */
	static public function checkDirectoriesWritableOrDie( $directoriesToCheck = null )
	{
		$resultCheck = Piwik::checkDirectoriesWritable( $directoriesToCheck );
		if( array_search(false, $resultCheck) !== false )
		{ 
			$directoryList = '';
			foreach($resultCheck as $dir => $bool)
			{
				$realpath = Piwik_Common::realpath($dir);
				if(!empty($realpath) && $bool === false)
				{
					$directoryList .= "<code>chmod 777 $realpath</code><br>";
				}
			}
			$directoryList .= '';
			$directoryMessage = "<p><b>Piwik couldn't write to some directories</b>.</p> <p>Try to Execute the following commands on your Linux server:</P>";
			$directoryMessage .= $directoryList;
			$directoryMessage .= "<p>If this doesn't work, you can try to create the directories with your FTP software, and set the CHMOD to 777 (with your FTP software, right click on the directories, permissions).";
			$directoryMessage .= "<p>After applying the modifications, you can <a href='index.php'>refresh the page</a>.";
			$directoryMessage .= "<p>If you need more help, try <a href='misc/redirectToUrl.php?url=http://piwik.org'>Piwik.org</a>.";
			
			Piwik_ExitWithMessage($directoryMessage, false, true);
		}
	}
	
	/**
	 * Checks if directories are writable and create them if they do not exist.
	 * 
	 * @param array $directoriesToCheck array of directories to check - if not given default Piwik directories that needs write permission are checked
	 * @return array direcory name => true|false (is writable)
	 */
	static public function checkDirectoriesWritable($directoriesToCheck = null)
	{
		if( $directoriesToCheck == null )		
		{
			$directoriesToCheck = array(
				'/config',
				'/tmp',
				'/tmp/templates_c',
				'/tmp/cache',
				'/tmp/latest/',
			); 
		}
		
		$resultCheck = array();
		foreach($directoriesToCheck as $directoryToCheck)
		{
			if( !ereg('^'.preg_quote(PIWIK_INCLUDE_PATH), $directoryToCheck) )
			{
				$directoryToCheck = PIWIK_INCLUDE_PATH . $directoryToCheck;
			}
			
			if(!file_exists($directoryToCheck))
			{
				Piwik_Common::mkdir($directoryToCheck, 0755, false);
			}
			
			$directory = Piwik_Common::realpath($directoryToCheck);
			$resultCheck[$directory] = false;
			if($directory !== false // realpath() returns FALSE on failure
				&& is_writable($directoryToCheck))
			{
				$resultCheck[$directory] = true;
			}
		}
		return $resultCheck;
	}
	
	/**
	 * Returns the Javascript code to be inserted on every page to track
	 *
	 * @param int $idSite
	 * @param string $piwikUrl http://path/to/piwik/directory/ 
	 * @param string $actionName
	 * @return string
	 */
	static public function getJavascriptCode($idSite, $piwikUrl, $actionName = "''")
	{	
		$jsTag = file_get_contents( PIWIK_INCLUDE_PATH . "/core/Tracker/javascriptTag.tpl");
		$jsTag = nl2br(htmlentities($jsTag));
		$piwikUrl = preg_match('/^(http|https):\/\/(.*)$/', $piwikUrl, $matches);
		$piwikUrl = $matches[2];
		$jsTag = str_replace('{$actionName}', $actionName, $jsTag);
		$jsTag = str_replace('{$idSite}', $idSite, $jsTag);
		$jsTag = str_replace('{$piwikUrl}', $piwikUrl, $jsTag);
		$jsTag = str_replace('{$hrefTitle}', Piwik::getRandomTitle(), $jsTag);
		return $jsTag;
	}
	
	static public function getMemoryLimitValue()
	{
		if($memory = ini_get('memory_limit'))
		{
			return substr($memory, 0, strlen($memory) - 1);
		}
		return false;
	}
	
	static public function setMemoryLimit($minimumMemoryLimit)
	{
		$currentValue = self::getMemoryLimitValue();
		if( ($currentValue === false
			|| $currentValue < $minimumMemoryLimit )
			&& @ini_set('memory_limit', $minimumMemoryLimit.'M'))
		{
			return true;
		}
		return false;
	}
	
	static public function raiseMemoryLimitIfNecessary()
	{
		$minimumMemoryLimit = Zend_Registry::get('config')->General->minimum_memory_limit;
		$memoryLimit = self::getMemoryLimitValue();
		if($memoryLimit === false
			|| $memoryLimit < $minimumMemoryLimit)
		{
			return self::setMemoryLimit($minimumMemoryLimit);
		}
		
		return false;
	}
	
	static public function log($message = '')
	{
		Zend_Registry::get('logger_message')->log($message);
		Zend_Registry::get('logger_message')->log( "<br>" . PHP_EOL);
	}
	
	
	static public function error($message = '')
	{
		trigger_error($message, E_USER_ERROR);
	}
	
	/**
	 * Display the message in a nice red font with a nice icon
	 * ... and dies
	 */
	static public function exitWithErrorMessage( $message )
	{
		$output = "<style>a{color:red;}</style>\n".
			"<div style='color:red;font-family:Georgia;font-size:120%'>".
			"<p><img src='themes/default/images/error_medium.png' style='vertical-align:middle; float:left;padding:20 20 20 20'>".
			$message.
			"</p></div>";
		print(Piwik_Log_Formatter_ScreenFormatter::getFormattedString($output));
		exit;
	}
	
	/**
	 * Computes the division of i1 by i2. If either i1 or i2 are not number, or if i2 has a value of zero
	 * we return 0 to avoid the division by zero.
	 *
	 * @param numeric $i1
	 * @param numeric $i2
	 * @return numeric The result of the division or zero 
	 */
	static public function secureDiv( $i1, $i2 )
	{
		if ( is_numeric($i1) && is_numeric($i2) && floatval($i2) != 0)
		{ 
			return $i1 / $i2;
		}   
		return 0;
	}
	static public function getQueryCount()
	{
		$profiler = Zend_Registry::get('db')->getProfiler();
		return $profiler->getTotalNumQueries();
	}
	static public function getDbElapsedSecs()
	{
		$profiler = Zend_Registry::get('db')->getProfiler();
		return $profiler->getTotalElapsedSecs();
	}
	static public function printQueryCount()
	{
		$totalTime = self::getDbElapsedSecs();
		$queryCount = self::getQueryCount();
		Piwik::log("Total queries = $queryCount (total sql time = ".round($totalTime,2)."s)");
	}
	
	static public function printSqlProfilingReportTracker( $db = null )
	{
		function maxSumMsFirst($a,$b)
		{
			return $a['sum_time_ms'] < $b['sum_time_ms'];
		}
		
		if(is_null($db))
		{
			$db = Zend_Registry::get('db');
		}
		$tableName = Piwik_Common::prefixTable('log_profiling');
		
		$all = $db->fetchAll('SELECT *, sum_time_ms / count as avg_time_ms 
								FROM '.$tableName );
		if($all === false) 
		{
			return;
		}
		usort($all, 'maxSumMsFirst');
		
		$infoIndexedByQuery = array();
		foreach($all as $infoQuery)
		{
			$query = $infoQuery['query'];
			$count = $infoQuery['count'];
			$sum_time_ms = $infoQuery['sum_time_ms'];
			$infoIndexedByQuery[$query] = array('count' => $count, 'sumTimeMs' => $sum_time_ms);
		}		
		Piwik::getSqlProfilingQueryBreakdownOutput($infoIndexedByQuery);
	}

	/**
	 * Outputs SQL Profiling reports 
	 * It is automatically called when enabling the SQL profiling in the config file enable_sql_profiler
	 *
	 */
	static function printSqlProfilingReportZend()
	{
		$profiler = Zend_Registry::get('db')->getProfiler();
		
		if(!$profiler->getEnabled())
		{
			throw new Exception("To display the profiler you should enable enable_sql_profiler on your config/config.ini.php file");
		}
		
		$infoIndexedByQuery = array();
		foreach($profiler->getQueryProfiles() as $query)
		{
			if(isset($infoIndexedByQuery[$query->getQuery()]))
			{
				$existing =  $infoIndexedByQuery[$query->getQuery()];
			}
			else
			{
				$existing = array( 'count' => 0, 'sumTimeMs' => 0);
			}
			$new = array( 'count' => $existing['count'] + 1,
							'sumTimeMs' =>  $existing['count'] + $query->getElapsedSecs() * 1000);
			$infoIndexedByQuery[$query->getQuery()] = $new;
		}
		function sortTimeDesc($a,$b)
		{
			return $a['sumTimeMs'] < $b['sumTimeMs'];
		}
		uasort( $infoIndexedByQuery, 'sortTimeDesc');
		
		Piwik::log('<hr><b>SQL Profiler</b>');
		Piwik::log('<hr><b>Summary</b>');
		$totalTime	= $profiler->getTotalElapsedSecs();
		$queryCount   = $profiler->getTotalNumQueries();
		$longestTime  = 0;
		$longestQuery = null;
		foreach ($profiler->getQueryProfiles() as $query) {
			if ($query->getElapsedSecs() > $longestTime) {
				$longestTime  = $query->getElapsedSecs();
				$longestQuery = $query->getQuery();
			}
		}
		$str = 'Executed ' . $queryCount . ' queries in ' . round($totalTime,3) . ' seconds' . "\n";
		$str .= '(Average query length: ' . round($totalTime / $queryCount,3) . ' seconds)' . "\n";
		$str .= '<br>Queries per second: ' . round($queryCount / $totalTime,1) . "\n";
		$str .= '<br>Longest query length: ' . round($longestTime,3) . " seconds (<code>$longestQuery</code>) \n";
		Piwik::log($str);
		Piwik::getSqlProfilingQueryBreakdownOutput($infoIndexedByQuery);
	}
	
	static private function getSqlProfilingQueryBreakdownOutput( $infoIndexedByQuery )
	{
		Piwik::log('<hr><b>Breakdown by query</b>');
		$output = '';
		foreach($infoIndexedByQuery as $query => $queryInfo) 
		{
			$timeMs = round($queryInfo['sumTimeMs'],1);
			$count = $queryInfo['count'];
			$avgTimeString = '';
			if($count > 1) 
			{
				$avgTimeMs = $timeMs / $count;
				$avgTimeString = " (average = <b>". round($avgTimeMs,1) . "ms</b>)"; 
			}
			$query = str_replace(array("\t","\n","\r\n","\r"), "_toberemoved_", $query);
			$query = str_replace('_toberemoved__toberemoved_','',$query);
			$query = str_replace('_toberemoved_', ' ',$query);
			$output .= "Executed <b>$count</b> time". ($count==1?'':'s') ." in <b>".$timeMs."ms</b> $avgTimeString <pre>\t$query</pre>";
		}
		Piwik::log($output);
	}
	
	static public function printTimer()
	{
		echo Zend_Registry::get('timer');
	}

	static public function printMemoryLeak($prefix = '', $suffix = '<br>')
	{
		echo $prefix;
		echo Zend_Registry::get('timer')->getMemoryLeak();
		echo $suffix;
	}
	
	static public function printMemoryUsage( $prefixString = null )
	{
		$memory = false;
		if(function_exists('xdebug_memory_usage'))
		{
			$memory = xdebug_memory_usage();
		}
		elseif(function_exists('memory_get_usage'))
		{
			$memory = memory_get_usage();
		}
				
		if($memory !== false)
		{
			$usage = round( $memory / 1024 / 1024, 2);
			if(!is_null($prefixString))
			{
				Piwik::log($prefixString);
			}
			Piwik::log("Memory usage = $usage Mb");
		}
		else
		{
			Piwik::log("Memory usage function not found.");
		}
	}
	
	static public function getPrettySizeFromBytes($size)
	{
		$bytes = array('','K','M','G','T');
		foreach($bytes as $val) 
		{
			if($size > 1024)
			{
				$size = $size / 1024;
			}
			else
			{
				break;
			}
		}
		return round($size, 1)." ".$val;
	}
	
	static public function isPhpCliMode()
	{
		return in_array(substr(php_sapi_name(), 0, 3), array('cgi', 'cli'));
	}
	
	static public function getCurrency()
	{
		static $symbol = null;
		if(is_null($symbol))
		{
			$symbol = Zend_Registry::get('config')->General->default_currency;
		}
		return $symbol;
	}

	static public function getPrettyMoney($value)
	{
		$symbol = self::getCurrency();
		return sprintf("$symbol%.2f", $value);
	}
	
	static public function getPercentageSafe($dividend, $divisor, $precision = 0)
	{
		if($divisor == 0)
		{
			return 0;
		}
		return round(100 * $dividend / $divisor, $precision);
	}
	
	static public function getPrettyTimeFromSeconds($numberOfSeconds)
	{
		$numberOfSeconds = (double)$numberOfSeconds;
		$days = floor($numberOfSeconds / 86400);
		
		$minusDays = $numberOfSeconds - $days * 86400;
		$hours = floor($minusDays / 3600);
		
		$minusDaysAndHours = $minusDays - $hours * 3600;
		$minutes = floor($minusDaysAndHours / 60 );
		
		$seconds = $minusDaysAndHours - $minutes * 60;
		
		if($days > 0)
		{
			return sprintf("%d days %d hours", $days, $hours);
		}
		elseif($hours > 0)
		{
			return sprintf("%d hours %d min", $hours, $minutes);
		}
		elseif($minutes > 0)
		{
			return sprintf("%d&nbsp;min&nbsp;%ds", $minutes, $seconds);		
		}
		else
		{
			return sprintf("%ds", $seconds);		
		}
	}
	
	static public function getRandomTitle()
	{
		$titles = array( 'Web analytics',
						'Analytics',
						'Web analytics api',
						'Open source analytics',
						'Open source web analytics',
						'Google Analytics alternative',
						'open source Google Analytics',
						'Free analytics',
						'Analytics software',
						'Free web analytics',
						'Free web statistics',
						'Web 2.0 analytics',
						'Statistics web 2.0',
				);
		$id = abs(intval(md5(substr(Piwik_Url::getCurrentHost(),7))));
		$title = $titles[ $id % count($titles)];
		return $title;
	}
	
	static public function getTableCreateSql( $tableName )
	{
		$tables = Piwik::getTablesCreateSql();
		
		if(!isset($tables[$tableName]))
		{
			throw new Exception("The table '$tableName' SQL creation code couldn't be found.");
		}
		
		return $tables[$tableName];
	}
	
	static public function getTablesCreateSql()
	{
		$config = Zend_Registry::get('config');
		$prefixTables = $config->database->tables_prefix;
		$tables = array(
			'site' => "CREATE TABLE {$prefixTables}site (
						  idsite SERIAL PRIMARY KEY,
						  name TEXT NOT NULL,
						  main_url TEXT NOT NULL,
						  ts_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL
						)
			",
			
			'logger_message' => "CREATE TABLE {$prefixTables}logger_message (
									  idlogger_message SERIAL PRIMARY KEY,
									  timestamp TIMESTAMP WITH TIME ZONE NULL,
									  message TEXT NULL
									)
			",
			
			'logger_api_call' => "CREATE TABLE {$prefixTables}logger_api_call (
									  idlogger_api_call SERIAL PRIMARY KEY,
									  class_name TEXT NULL,
									  method_name TEXT NULL,
									  parameter_names_default_values TEXT NULL,
									  parameter_values TEXT NULL,
									  execution_time FLOAT NULL,
									  caller_ip BIGINT NULL,
									  timestamp TIMESTAMP WITH TIME ZONE NULL,
									  returned_value TEXT NULL
									)
			",
			
			'logger_error' => "CREATE TABLE {$prefixTables}logger_error (
									  idlogger_error SERIAL PRIMARY KEY,
									  timestamp TIMESTAMP NULL,
									  message TEXT NULL,
									  errno INTEGER  NULL CHECK (errno >= 0),
									  errline INTEGER  NULL CHECK (errline >= 0),
									  errfile TEXT NULL,
									  backtrace TEXT NULL
									)
			",
			
			'logger_exception' => "CREATE TABLE {$prefixTables}logger_exception (
									  idlogger_exception SERIAL PRIMARY KEY,
									  timestamp TIMESTAMP WITH TIME ZONE NULL,
									  message TEXT NULL,
									  errno INTEGER  NULL CHECK (errno >= 0),
									  errline INTEGER  NULL CHECK (errline >= 0),
									  errfile TEXT NULL,
									  backtrace TEXT NULL
									)
			",
			
			'log_action' => "CREATE TABLE {$prefixTables}log_action (
									  idaction SERIAL PRIMARY KEY,
									  name TEXT NOT NULL,
									  type INTEGER NULL CHECK (type >= 0)
						)
			",
					
			'log_visit' => "CREATE TABLE {$prefixTables}log_visit (
							  idvisit SERIAL PRIMARY KEY,
							  idsite INTEGER  NOT NULL,
							  visitor_localtime TIME NOT NULL,
							  visitor_idcookie TEXT NOT NULL,
							  visitor_returning INTEGER NOT NULL,
							  visit_first_action_time TIMESTAMP WITH TIME ZONE NOT NULL,
							  visit_last_action_time TIMESTAMP WITH TIME ZONE NOT NULL,
							  visit_server_date DATE NOT NULL,
							  visit_exit_idaction INTEGER NOT NULL,
							  visit_entry_idaction INTEGER NOT NULL,
							  visit_total_actions INTEGER NOT NULL CHECK (visit_total_actions >= 0),
							  visit_total_time INTEGER NOT NULL CHECK (visit_total_time >= 0),
							  visit_goal_converted INTEGER NOT NULL,
							  referer_type INTEGER  NULL CHECK (referer_type >= 0),
							  referer_name TEXT NULL,
							  referer_url TEXT NOT NULL,
							  referer_keyword TEXT NULL,
							  config_md5config TEXT NOT NULL,
							  config_os TEXT NOT NULL,
							  config_browser_name TEXT NOT NULL,
							  config_browser_version TEXT NOT NULL,
							  config_resolution TEXT NOT NULL,
							  config_pdf INTEGER NOT NULL,
							  config_flash INTEGER NOT NULL,
							  config_java INTEGER NOT NULL,
							  config_director INTEGER NOT NULL,
							  config_quicktime INTEGER NOT NULL,
							  config_realplayer INTEGER NOT NULL,
							  config_windowsmedia INTEGER NOT NULL,
							  config_cookie INTEGER NOT NULL,
							  location_ip BIGINT NOT NULL,
							  location_browser_lang TEXT NOT NULL,
							  location_country TEXT NOT NULL,
							  location_continent TEXT NOT NULL
							)
			",		
			
			'log_link_visit_action' => "CREATE TABLE {$prefixTables}log_link_visit_action (
											  idlink_va SERIAL PRIMARY KEY,
											  idvisit INTEGER  NOT NULL,
											  idaction INTEGER  NOT NULL,
											  idaction_ref INTEGER NOT NULL,
											  time_spent_ref_action INTEGER  NOT NULL CHECK (time_spent_ref_action >= 0)
											)
			",
		
			'user' => "CREATE TABLE {$prefixTables}user (
						  login TEXT NOT NULL PRIMARY KEY,
						  password TEXT NOT NULL,
						  alias TEXT NOT NULL,
						  email TEXT NOT NULL,
						  token_auth TEXT NOT NULL UNIQUE,
						  date_registered TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL
						)
			",

			'access' => "CREATE TABLE {$prefixTables}access (
						  login TEXT NOT NULL,
						  idsite INTEGER  NOT NULL,
						  access TEXT NULL,
						  PRIMARY KEY(login, idsite)
						)
			",

			'site_url' => "CREATE TABLE {$prefixTables}site_url (
							  idsite INTEGER NOT NULL,
							  url TEXT NOT NULL,
							  PRIMARY KEY(idsite, url)
						)
			",

			'goal' => "	CREATE TABLE {$prefixTables}goal (
							  idsite INTEGER NOT NULL,
							  idgoal INTEGER NOT NULL,
							  name TEXT NOT NULL,
							  match_attribute TEXT NOT NULL,
							  pattern TEXT NOT NULL,
							  pattern_type TEXT NOT NULL,
							  case_sensitive INTEGER NOT NULL,
							  revenue FLOAT NOT NULL,
							  deleted INTEGER NOT NULL default 0,
							  PRIMARY KEY  (idsite,idgoal)
							)
			",

			'log_conversion' => "CREATE TABLE {$prefixTables}log_conversion (
									  idvisit INTEGER NOT NULL,
									  idsite INTEGER NOT NULL,
									  visitor_idcookie TEXT NOT NULL,
									  server_time TIMESTAMP WITH TIME ZONE NOT NULL,
									  visit_server_date DATE NOT NULL,
									  idaction INTEGER NOT NULL,
									  idlink_va INTEGER NOT NULL,
									  referer_idvisit INTEGER DEFAULT NULL CHECK (referer_idvisit >= 0),
									  referer_visit_server_date DATE DEFAULT NULL,
									  referer_type INTEGER DEFAULT NULL CHECK (referer_type >= 0),
									  referer_name TEXT DEFAULT NULL,
									  referer_keyword TEXT DEFAULT NULL,
									  visitor_returning INTEGER NOT NULL,
									  location_country TEXT NOT NULL,
									  location_continent TEXT NOT NULL,
									  url TEXT NOT NULL,
									  idgoal INTEGER NOT NULL CHECK (idgoal >= 0),
									  revenue FLOAT DEFAULT NULL,
									  PRIMARY KEY  (idvisit,idgoal)
									)
			",

			'log_profiling' => "CREATE TABLE {$prefixTables}log_profiling (
								  query TEXT NOT NULL UNIQUE,
								  count INTEGER  NULL CHECK (count >= 0),
								  sum_time_ms FLOAT NULL
								)
			",
			
			'option' => "CREATE TABLE {$prefixTables}option (
								option_name TEXT NOT NULL PRIMARY KEY,
								option_value TEXT NOT NULL ,
								autoload INTEGER NOT NULL DEFAULT 1
								)
			",
				# FIXME idsite NULL ?
			'archive_numeric'	=> "CREATE TABLE {$prefixTables}archive_numeric (
									  idarchive INTEGER  NOT NULL CHECK (idarchive >= 0),
									  name TEXT NOT NULL,
									  idsite INTEGER  NULL CHECK (idsite >= 0),
									  date1 DATE NULL,
									  date2 DATE NULL,
									  period INTEGER NULL CHECK (period >= 0),
									  ts_archived TIMESTAMP WITH TIME ZONE NULL,
								  	  value FLOAT NULL,
									  PRIMARY KEY(idarchive, name)
									)
			",
						# FIXME idsite NULL ?
			'archive_blob'	=> "CREATE TABLE {$prefixTables}archive_blob (
									  idarchive INTEGER  NOT NULL CHECK (idarchive >= 0),
									  name TEXT NOT NULL,
									  idsite INTEGER  NULL CHECK (idsite >= 0),
									  date1 DATE NULL,
									  date2 DATE NULL,
									  period INTEGER NULL CHECK (period >= 0),
									  ts_archived TIMESTAMP WITH TIME ZONE NULL,
									  value TEXT NULL,
									  PRIMARY KEY(idarchive, name)
									)			",
		);
		return $tables;
	}
# FIXME pgsql merge functions
	static public function getIndexCreateSql( $indexName )
	{
		$index = Piwik::getIndexesCreateSql();

		if(!isset($index[$indexName]))
		{
			throw new Exception("The index '$indexName' SQL creation code couldn't be found.");
		}

		return $index[$indexName];
	}

	static public function getIndexesCreateSql()
	{
		$config = Zend_Registry::get('config');
		$prefixTables = $config->database->tables_prefix;
		$tables = array(
			'log_action_index' => "CREATE INDEX {$prefixTables}log_action_index ON {$prefixTables}log_action(type, name)",
			'log_visit_index' => "CREATE INDEX {$prefixTables}log_visit_index ON {$prefixTables}log_visit(idsite, visit_server_date)",
			'log_link_visit_action_index' => "CREATE INDEX {$prefixTables}log_link_visit_action_index ON {$prefixTables}log_link_visit_action(idvisit)",
			'log_conversion_index' => "CREATE INDEX {$prefixTables}log_conversion_index ON {$prefixTables}log_conversion(idsite,visit_server_date)",
			'archive_numeric_index' => "CREATE INDEX {$prefixTables}archive_numeric_index ON {$prefixTables}archive_numeric(idsite,date1,date2,name,ts_archived)",
			'archive_blob_index' => "CREATE INDEX {$prefixTables}archive_blob_index ON {$prefixTables}archive_blob(idsite,date1,date2,name,ts_archived)"
		);
		return $tables;
	}
	
	static public function getCurrentUserLogin()
	{
		return Zend_Registry::get('access')->getLogin();
	}
	
	static public function getCurrentUserTokenAuth()
	{
		return Zend_Registry::get('access')->getTokenAuth();
	}
	
	/**
	 * Returns the plugin currently being used to display the page
	 *
	 * @return Piwik_Plugin
	 */
	static public function getCurrentPlugin()
	{
		return Piwik_PluginsManager::getInstance()->getLoadedPlugin(Piwik::getModule());
	}
	
	/**
	 * Returns true if the current user is either the super user, or the user $theUser
	 * Used when modifying user preference: this usually requires super user or being the user itself.
	 * 
	 * @param string $theUser
	 * @return bool
	 */
	static public function isUserIsSuperUserOrTheUser( $theUser )
	{
		try{
			self::checkUserIsSuperUserOrTheUser( $theUser );
			return true;
		} catch( Exception $e){
			return false;
		}
	}
	
	/**
	 * @param string $theUser
	 * @throws exception if the user is neither the super user nor the user $theUser
	 */
	static public function checkUserIsSuperUserOrTheUser( $theUser )
	{
		try{
			if( Piwik::getCurrentUserLogin() !== $theUser)
			{
				// or to the super user
				Piwik::checkUserIsSuperUser();
			}
		} catch( Piwik_Access_NoAccessException $e){
			throw new Piwik_Access_NoAccessException("The user has to be either the Super User or the user '$theUser' itself.");
		}
	}
	
	/**
	 * Returns true if the current user is the Super User
	 * @return bool
	 */
	static public function isUserIsSuperUser()
	{
		try{
			self::checkUserIsSuperUser();
			return true;
		} catch( Exception $e){
			return false;
		}
	}
	
	/**
	 * Helper method user to set the current as Super User.
	 * This should be used with great care as this gives the user all permissions.
	 */
	static public function setUserIsSuperUser()
	{
		Zend_Registry::get('access')->setSuperUser();
	}
	
	static public function checkUserIsSuperUser()
	{
		Zend_Registry::get('access')->checkUserIsSuperUser();
	}
	
	static public function isUserHasAdminAccess( $idSites )
	{
		try{
			self::checkUserHasAdminAccess( $idSites );
			return true;
		} catch( Exception $e){
			return false;
		}
	}
	
	static public function checkUserHasAdminAccess( $idSites )
	{
		Zend_Registry::get('access')->checkUserHasAdminAccess( $idSites );
	}
	
	static public function isUserHasSomeAdminAccess()
	{
		try{
			self::checkUserHasSomeAdminAccess();
			return true;
		} catch( Exception $e){
			return false;
		}
	}
	
	static public function checkUserHasSomeAdminAccess()
	{
		Zend_Registry::get('access')->checkUserHasSomeAdminAccess();
	}
	
	static public function checkUserHasSomeViewAccess()
	{
		Zend_Registry::get('access')->checkUserHasSomeViewAccess();
	}
	
	static public function isUserHasViewAccess( $idSites )
	{
		try{
			self::checkUserHasViewAccess( $idSites );
			return true;
		} catch( Exception $e){
			return false;
		}
	}
	
	static public function checkUserHasViewAccess( $idSites )
	{
		Zend_Registry::get('access')->checkUserHasViewAccess( $idSites );
	}
	
	static public function prefixClass( $class )
	{
		if(substr_count($class, Piwik::CLASSES_PREFIX) > 0)
		{
			return $class;
		}
		return Piwik::CLASSES_PREFIX.$class;
	}
	static public function unprefixClass( $class )
	{
		$lenPrefix = strlen(Piwik::CLASSES_PREFIX);
		if(substr($class, 0, $lenPrefix) == Piwik::CLASSES_PREFIX)
		{
			return substr($class, $lenPrefix);
		}
		return $class;
	}

	/**
	 * Returns the current module read from the URL (eg. 'API', 'UserSettings', etc.)
	 *
	 * @return string
	 */
	static public function getModule()
	{
		return Piwik_Common::getRequestVar('module', '', 'string');
	}
	
	/**
	 * Returns the current action read from the URL
	 *
	 * @return string
	 */
	static public function getAction()
	{
		return Piwik_Common::getRequestVar('action', '', 'string');
	}
	
	/**
	 * returns false if the URL to redirect to is already this URL
	 */
	static public function redirectToModule( $newModule, $newAction = '' )
	{
		$currentModule = self::getModule();
		$currentAction = self::getAction();
	
		if($currentModule != $newModule
			||  $currentAction != $newAction )
		{
			
			$newUrl = Piwik_URL::getCurrentUrlWithoutQueryString() 
				. Piwik_Url::getCurrentQueryStringWithParametersModified(
						array('module' => $newModule, 'action' => $newAction)
				);
	
			Piwik_Url::redirectToUrl($newUrl);
		}
		return false;
	}
	
	static public function displayScreenForCoreAndPluginsUpdatesIfNecessary()
	{
		require_once "Updater.php";
		require_once "Version.php";
		$updater = new Piwik_Updater();
		$updater->addComponentToCheck('core', Piwik_Version::VERSION);
		
		$plugins = Piwik_PluginsManager::getInstance()->getInstalledPlugins();
		foreach($plugins as $pluginName => $plugin)
		{
			$updater->addComponentToCheck($pluginName, $plugin->getVersion());
		}
		
		$componentsWithUpdateFile = $updater->getComponentsWithUpdateFile();
		if(count($componentsWithUpdateFile) == 0)
		{
			return;
		}
			
		require_once "CoreUpdater/Controller.php";
		$updaterController = new Piwik_CoreUpdater_Controller();
		$updaterController->runUpdaterAndExit($componentsWithUpdateFile);
	}
	
	/**
	 * Sends http request ensuring the request will fail before $timeout seconds
	 * Returns the response content (no header, trimmed)
	 * @param string $url
	 * @param int $timeout
	 * @return string|false false if request failed
	 */
	static public function sendHttpRequest($url, $timeout)
	{
		$response = false;
		// we make sure the request takes less than a few seconds to fail
		// we create a stream_context (works in php >= 5.2.1)
		// we also set the socket_timeout (for php < 5.2.1) 
		$default_socket_timeout = @ini_get('default_socket_timeout');
		@ini_set('default_socket_timeout', $timeout);
		
		$ctx = null;
		if(function_exists('stream_context_create')) {
			$ctx = stream_context_create(array('http' => array( 'timeout' => $timeout)));
		}
		$response = trim(@file_get_contents($url, 0, $ctx));
		
		// restore the socket_timeout value
		if(!empty($default_socket_timeout))
		{
			@ini_set('default_socket_timeout', $default_socket_timeout);
		}
		return $response;
	}
	
	/**
	 * Fetch the file at $url in the destination $pathDestination
	 * @param string $url
	 * @param string $pathDestination
	 * @param int $tries
	 * @return true on success, throws Exception on failure
	 */
	static public function fetchRemoteFile($url, $pathDestination, $tries = 0)
	{
		if ($tries > 3) {
			return false;
		}
		
		$file = @fopen($pathDestination, 'wb');
		if(!$file) {
			throw new Exception("Error while creating the file: ".$file);
		}
		$url = parse_url($url);
		$host = $url['host'];
		$path = $url['path'];
		
		if (($s = @fsockopen($host, $port = 80, $errno, $errstr, $timeout = 10)) === false) {
			throw new Exception("Error while connecting to: $host. Please try again later.");
		}
		
		fwrite($s,
			'GET '.$path." HTTP/1.0\r\n"
			.'Host: '.$host."\r\n"
			."User-Agent: Piwik Update\r\n"
			."\r\n"
		);
		
		$i = 0;
		$in_content = false;
		while (!feof($s))
		{
			$line = fgets($s,4096);
			if (rtrim($line,"\r\n") == '' && !$in_content) {
				$in_content = true;
				$i++;
				continue;
			}
			if ($i == 0) {
				if (!preg_match('/HTTP\/(\\d\\.\\d)\\s*(\\d+)\\s*(.*)/',rtrim($line,"\r\n"), $m)) {
					fclose($s);
					return false;
				}
				$status = (integer) $m[2];
				if ($status < 200 || $status >= 400) {
					fclose($s);
					return false;
				}
			}
			if (!$in_content) {
				if (preg_match('/Location:\s+?(.+)$/',rtrim($line,"\r\n"),$m)) {
					fclose($s);
					return fetchRemote(trim($m[1]), $pathDestination, $tries+1);
				}
				$i++;
				continue;
			}
			if (is_resource($file)) {
				fwrite($file,$line);
			}			
			$i++;
		}
		fclose($s);
		return true;
	}
	
	/**
	 * Recursively delete a directory
	 *
	 * @param string $dir Directory name
	 * @param boolean $deleteRootToo Delete specified top-level directory as well
	 */
	static public function unlinkRecursive($dir, $deleteRootToo)
	{
		if(!$dh = @opendir($dir))
		{
			return;
		}
		while (false !== ($obj = readdir($dh)))
		{
			if($obj == '.' || $obj == '..')
			{
				continue;
			}
	
			if (!@unlink($dir . '/' . $obj))
			{
				self::unlinkRecursive($dir.'/'.$obj, true);
			}
		}
		closedir($dh);
		if ($deleteRootToo)
		{
			@rmdir($dir);
		}
		return;
	} 
	
	/**
	 * Copy recursively from $source to $target.
	 * 
	 * @param string $source eg. './tmp/latest'
	 * @param string $target eg. '.'
	 * @return void
	 */
	static public function copyRecursive($source, $target )
	{
		if ( is_dir( $source ) )
		{
			@mkdir( $target );
			$d = dir( $source );
			while ( false !== ( $entry = $d->read() ) )
			{
				if ( $entry == '.' || $entry == '..' )
				{
					continue;
				}
			   
				$sourcePath = $source . '/' . $entry;		   
				if ( is_dir( $sourcePath ) )
				{
					self::copyRecursive( $sourcePath, $target . '/' . $entry );
					continue;
				}
				$destPath = $target . '/' . $entry;
				self::copy($sourcePath, $destPath);
			}
			$d->close();
		}
		else
		{
			self::copy($source, $target);
		}
	}
	
	static public function copy($source, $dest)
	{
		if(!@copy( $source, $dest ))
		{
			@chmod($dest, 0755);
	   		if(!@copy( $source, $dest )) 
	   		{
				throw new Exception("
				Error while copying file to <code>$dest</code>. <br />
				Please check that the web server has enough permission to overwrite this file. <br/>
				For example, on a linux server, if your apache user is www-data you can try to execute:<br>
				<code>chown -R www-data:www-data ".Piwik_Common::getPathToPiwikRoot()."</code><br>
				<code>chmod -R 0755 ".Piwik_Common::getPathToPiwikRoot()."</code><br>
					");
	   		}
		}
		return true;
	}
	/**
	 * API was simplified in 0.2.27, but we maintain backward compatibility 
	 * when calling Piwik::prefixTable
	 */
	static public function prefixTable( $table )
	{
		return Piwik_Common::prefixTable($table);
	}
	
	/**
	 * Names of all the prefixed tables in piwik
	 * Doesn't use the DB 
	 */
	static public function getTablesNames()
	{
		$aTables = array_keys(self::getTablesCreateSql());
		$config = Zend_Registry::get('config');
		$prefixTables = $config->database->tables_prefix;
		$return = array();
		foreach($aTables as $table)
		{
			$return[] = $prefixTables.$table;
		}
		return $return;
	}
	
	static $tablesInstalled = null;
	
	static public function getTablesInstalled($forceReload = true,  $idSite = null)
	{
		if(is_null(self::$tablesInstalled)
			|| $forceReload === true)
		{
			$db = Zend_Registry::get('db');
			$config = Zend_Registry::get('config');
			$prefixTables = $config->database->tables_prefix;
			
			$allTables = $db->listTables();
			
			// all the tables to be installed
			$allMyTables = self::getTablesNames();
			
			// we get the intersection between all the tables in the DB and the tables to be installed
			$tablesInstalled = array_intersect($allMyTables, $allTables);
			
			// at this point we have only the piwik tables which is good
			// but we still miss the piwik generated tables (using the class Piwik_TablePartitioning)
			$idSiteInSql = "no";
			if(!is_null($idSite))
			{
				$idSiteInSql = $idSite;
			}
			$sql = "SELECT c.relname  AS table_name "
				. "FROM pg_catalog.pg_class c "
				. "JOIN pg_catalog.pg_roles r ON r.oid = c.relowner "
				. "LEFT JOIN pg_catalog.pg_namespace n ON n.oid = c.relnamespace "
				. "WHERE n.nspname <> 'pg_catalog' "
				. "AND n.nspname !~ '^pg_toast' "
				. "AND pg_catalog.pg_table_is_visible(c.oid) "
				. "AND c.relkind = 'r' "
				. "AND c.relname "
				. " LIKE ";
			$allArchiveNumeric = $db->fetchCol("/* SHARDING_ID_SITE = ".$idSiteInSql." */ 
												$sql '".$prefixTables."archive_numeric%'");
			$allArchiveBlob = $db->fetchCol("/* SHARDING_ID_SITE = ".$idSiteInSql." */ 
												$sql '".$prefixTables."archive_blob%'");
					
			$allTablesReallyInstalled = array_merge($tablesInstalled, $allArchiveNumeric, $allArchiveBlob);
			
			self::$tablesInstalled = $allTablesReallyInstalled;
		}
		return 	self::$tablesInstalled;
	}
	
	static public function createDatabase( $dbName = null )
	{
		if(is_null($dbName))
		{
			$dbName = Zend_Registry::get('config')->database->dbname;
		}
		Zend_Registry::get('db')->query("DROP DATABASE IF EXISTS ".$dbName);
		Zend_Registry::get('db')->query("CREATE DATABASE ".$dbName);
	}
	
	static public function dropDatabase()
	{
		$dbName = Zend_Registry::get('config')->database->dbname;
		Zend_Registry::get('db')->query("DROP DATABASE IF EXISTS " . $dbName);
	}
	
	static public function createDatabaseObject( $dbInfos = null )
	{
		$config = Zend_Registry::get('config');
		
		if(is_null($dbInfos))
		{
			$dbInfos = $config->database->toArray();
		}
		
		$dbInfos['profiler'] = $config->Debug->enable_sql_profiler;
		# the following to prevent error with zend 
		unset ($dbInfos['tables_prefix']);
		unset ($dbInfos['adapter']);
		$db = null;
		Piwik_PostEvent('Reporting.createDatabase', $db);
		if(is_null($db))
		{
			$db = Zend_Db::factory($config->database->adapter, $dbInfos);
			$db->getConnection();
			Zend_Db_Table::setDefaultAdapter($db);
			$db->resetConfigArray(); // we don't want this information to appear in the logs
		}
		Zend_Registry::set('db', $db);
	}
	
	static public function disconnectDatabase()
	{
		Zend_Registry::get('db')->closeConnection();
	}
	
	static public function getSqlVersion()
	{
		return Zend_Registry::get('db')->fetchOne("show server_version");
	}

	static public function createLogObject()
	{
		require_once "Log/APICall.php";
		require_once "Log/Exception.php";
		require_once "Log/Error.php";
		require_once "Log/Message.php";
		
		$configAPI = Zend_Registry::get('config')->log;
		
		$aLoggers = array(
				'logger_api_call' => new Piwik_Log_APICall,
				'logger_exception' => new Piwik_Log_Exception,
				'logger_error' => new Piwik_Log_Error,
				'logger_message' => new Piwik_Log_Message,
			);			
			
		foreach($configAPI as $loggerType => $aRecordTo)
		{
			if(isset($aLoggers[$loggerType]))
			{
				$logger = $aLoggers[$loggerType];
				
				foreach($aRecordTo as $recordTo)
				{
					switch($recordTo)
					{
						case 'screen':
							$logger->addWriteToScreen();
						break;
						
						case 'database':
							$logger->addWriteToDatabase();
						break;
						
						case 'file':
							$logger->addWriteToFile();		
						break;
						
						default:
							throw new Exception("'$recordTo' is not a valid Log type. Valid logger types are: screen, database, file.");
						break;
					}
				}
			}
		}
		
		foreach($aLoggers as $loggerType =>$logger)
		{
			if($logger->getWritersCount() == 0)
			{
				$logger->addWriteToNull();
			}
			Zend_Registry::set($loggerType, $logger);
		}
	}
	
	static public function createConfigObject( $pathConfigFile = null )
	{
		$config = new Piwik_Config($pathConfigFile);
		Zend_Registry::set('config', $config);
		$config->init();
	}

	static public function createAccessObject()
	{
		Zend_Registry::set('access', new Piwik_Access());
	}
	
	static public function dropTables( $doNotDelete = array() )
	{
		$tablesAlreadyInstalled = self::getTablesInstalled();
		$db = Zend_Registry::get('db');
		
		$doNotDeletePattern = "(".implode("|",$doNotDelete).")";
		
		foreach($tablesAlreadyInstalled as $tableName)
		{
			
			if( count($doNotDelete) == 0
				|| (!in_array($tableName,$doNotDelete)
					&& !ereg($doNotDeletePattern,$tableName)
					)
				)
			{
				$db->query("DROP TABLE $tableName cascade");
			}
		}			
	}
	
	/**
	 * Returns true if the email is a valid email
	 * 
	 * @param string email
	 * @return bool
	 */
	static public function isValidEmailString( $email ) 
	{
		return (preg_match('/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9_.-]+\.[a-zA-Z]{2,4}$/', $email) > 0);
	}
	
	/**
	 * Creates an entry in the User table for the "anonymous" user. 
	 * 
	 * @return void
	 */
	static public function createAnonymousUser()
	{
		// The anonymous user is the user that is assigned by default 
		// note that the token_auth value is anonymous, which is assigned by default as well in the Login plugin
		$db = Zend_Registry::get('db');
		$db->query("INSERT INTO ". Piwik::prefixTable("user") . " 
					VALUES ( 'anonymous', '', 'anonymous', 'anonymous@example.org', 'anonymous', CURRENT_TIMESTAMP );" );
	}
	
	static public function createTables()
	{
		$db = Zend_Registry::get('db');
		$config = Zend_Registry::get('config');
		$prefixTables = $config->database->tables_prefix;

		$tablesAlreadyInstalled = self::getTablesInstalled();
		$tablesToCreate = self::getTablesCreateSql();
		$indexToCreate = self::getIndexesCreateSql();
		unset($tablesToCreate['archive_blob']);
		unset($tablesToCreate['archive_numeric']);
		unset($indexToCreate['archive_blob_index']);
		unset($indexToCreate['archive_numeric_index']);
		$db->query( "begin;" );
		foreach($tablesToCreate as $tableName => $tableSql)
		{
			$tableName = $prefixTables . $tableName;
			if(!in_array($tableName, $tablesAlreadyInstalled))
			{
				$db->query( $tableSql );
			}
		}
		foreach($indexToCreate as $indexName => $indexSql)
		{
			$indexName = $prefixTables . $indexName;
			if(!in_array($indexName, $tablesAlreadyInstalled))
			{
				$db->query( $indexSql );
			}
		}
		$db->query( "commit;" );
	}
	
	static public function truncateAllTables()
	{
		$tablesAlreadyInstalled = self::getTablesInstalled($forceReload = true);
		foreach($tablesAlreadyInstalled as $table) 
		{
			Zend_Registry::get('db')->query("TRUNCATE \"$table\"");
		}
	}
	
	static public function install()
	{
		Piwik_Common::mkdir(Zend_Registry::get('config')->smarty->compile_dir);
	}
	
	static public function uninstall()
	{
		$db = Zend_Registry::get('db');
		$db->query( "DROP TABLE IF EXISTS ". implode(", ", self::getTablesNames()) );
	}
}

