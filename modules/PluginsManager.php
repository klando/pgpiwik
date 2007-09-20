<?php

/**
 * Plugin specification for a statistics logging plugin
 * 
 * A plugin that display data in the Piwik Interface is very different from a plugin 
 * that will save additional data in the database during the statistics logging. 
 * These two types of plugins don't have the same requirements at all. Therefore a plugin
 * that saves additional data in the database during the stats logging process will have a different
 * structure.
 * 
 * A plugin for logging data has to focus on performance and therefore has to stay as simple as possible.
 * For input data, it is strongly advised to use the Piwik methods available in Piwik_Common 
 *
 * Things that can be done with such a plugin:
 * - having a dependency with a list of other plugins
 * - have an install step that would prepare the plugin environment
 * 		- install could add columns to the tables
 * 		- install could create tables 
 * - register to hooks at several points in the logging process
 * - register to hooks in other plugins
 * - generally a plugin method can modify data (filter) and add/remove data 
 * 
 * 
 * @package Piwik
 */
require_once "Plugin.php";
require_once "Event/Dispatcher.php";

class Piwik_PluginsManager
{
	public $dispatcher;
	protected $pluginsToLoad = array();
	protected $installPlugins = false;
	protected $doLoadPlugins = true;
	protected $languageToLoad = null;
	protected $loadedPlugins = array();
	
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
	
	private function __construct()
	{
		$this->dispatcher = Event_Dispatcher::getInstance();
	}
	
	public function isPluginEnabled($name)
	{
		return in_array( $name, $this->pluginsToLoad->toArray());		
	}
	
	public function setPluginsToLoad( $array )
	{
		$this->pluginsToLoad = $array;
		
		$this->loadPlugins();
	}
	
	public function doNotLoadPlugins()
	{
		$this->doLoadPlugins = false;
	}
	
	protected function addLoadedPlugin($newPlugin)
	{
		$this->loadedPlugins[] = $newPlugin;
	}
	
	public function getLoadedPluginsName()
	{
		$oPlugins = $this->getLoadedPlugins();
		$pluginNames = array();
		foreach($oPlugins as $plugin)
		{
			$pluginNames[] = get_class($plugin);
		}
		return $pluginNames;
	}
	
	public function getLoadedPlugins()
	{
		return $this->loadedPlugins;
	}
	/**
	 * Load the plugins classes installed.
	 * Register the observers for every plugin.
	 * 
	 */
	public function loadPlugins()
	{		
		foreach($this->pluginsToLoad as $pluginName)
		{
			$pluginFileName = $pluginName . ".php";
			$pluginClassName = "Piwik_".$pluginName;
			
			// TODO make sure the plugin name is secure
			// make sure thepluigin is a child of Piwik_Plugin
			$path = PIWIK_PLUGINS_PATH . '/' . $pluginFileName;

			if(!is_file($path))
			{
				throw new Exception("The plugin file {$path} couldn't be found.");
			}
			
			require_once $path;
			
			$newPlugin = new $pluginClassName;
			
			if(!($newPlugin instanceof Piwik_Plugin))
			{
				throw new Exception("The plugin $pluginClassName in the file $path must inherit from Piwik_Plugin.");
			}
			
			if($this->doLoadPlugins)
			{
				$newPlugin->registerTranslation( $this->languageToLoad );
				$this->addPluginObservers( $newPlugin );
				$this->addLoadedPlugin($newPlugin);
			}
		}
	}
	
	public function installPlugins()
	{
		foreach($this->getLoadedPlugins() as $plugin)
		{		
//			var_dump($plugin);
			try{
				$plugin->install();
			} catch(Exception $e) {
				//TODO Better plugin management....
			}
		}
	}
	
	public function setLanguageToLoad( $code )
	{
		$this->languageToLoad = $code;
	}
	
	/**
	 * For the given plugin, add all the observers of this plugin.
	 */
	private function addPluginObservers( Piwik_Plugin $plugin )
	{
		$hooks = $plugin->getListHooksRegistered();
		
		foreach($hooks as $hookName => $methodToCall)
		{
			$this->dispatcher->addObserver( array( $plugin, $methodToCall), $hookName );
		}
	}
	
}

/**
 * Post an event to the dispatcher which will notice the observers
 */
function Piwik_PostEvent( $eventName, $object = null, $info = array() )
{
	Piwik_PluginsManager::getInstance()->dispatcher->post( $object, $eventName, $info, true, false );
}


