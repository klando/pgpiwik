<?php
/**
 * Piwik - Open source web analytics
 * 
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html Gpl v3 or later
 * @version $Id$
 * 
 * @package Piwik_ExamplePlugin
 */

class Piwik_Dashboard extends Piwik_Plugin
{
	public function getInformation()
	{
		return array(
			'name' => 'Dashboard',
			'description' => 'Your Web Analytics Dashboard. You can customize Your Dashboard: add new widgets, change the order of your widgets. Each user can access his own custom Dashboard.',
			'author' => 'Piwik',
			'homepage' => 'http://piwik.org/',
			'version' => '0.1',
		);
	}

	public function getListHooksRegistered()
	{
		return array( 
			'template_js_import' => 'js',
			'template_css_import' => 'css',
		);
	}

	function js()
	{
		echo '
<script type="text/javascript" src="plugins/Dashboard/templates/widgetMenu.js"></script>
<script type="text/javascript" src="libs/javascript/json2.js"></script>
<script type="text/javascript" src="plugins/Dashboard/templates/Dashboard.js"></script>
		';
	}

	function css()
	{
		echo '<link rel="stylesheet" type="text/css" href="plugins/Dashboard/templates/dashboard.css" />';
	}
	
	public function install()
	{
		// we catch the exception
		try{
			$sql = "CREATE TABLE ". Piwik::prefixTable('user_dashboard')." (
					login TEXT NOT NULL,
					iddashboard INT NOT NULL ,
					layout TEXT NOT NULL,
					PRIMARY KEY ( login , iddashboard )
					);";
			Piwik_Query($sql);
		} catch(Zend_Db_Statement_Exception $e){
			// pgsql code error 42P07: duplicate table 
			// see bug #153 http://dev.piwik.org/trac/ticket/153
			if(ereg('42P07',$e->getMessage()))
			{
				return;
			}
			else
			{
				throw $e;
			}
		}
	}
	
	public function uninstall()
	{
		$sql = "DROP TABLE ". Piwik::prefixTable('user_dashboard') ;
		Piwik_Query($sql);		
	}
	
}

Piwik_AddMenu('Dashboard_Dashboard', '', array('module' => 'Dashboard', 'action' => 'embeddedIndex'));
