<?php

/**
 * @package Piwik
 */
class Piwik_Login_Auth extends Zend_Auth_Adapter_DbTable implements Piwik_Auth
{
	public function __construct()
	{
		$db = Zend_Registry::get('db');
		parent::__construct($db);
	}

	public function authenticate()
	{
		$rootLogin = Zend_Registry::get('config')->superuser->login;
		$rootPassword = Zend_Registry::get('config')->superuser->password;
		$rootToken = Piwik_UsersManager_API::getTokenAuth($rootLogin,$rootPassword);

		if($this->_identity == $rootLogin
			&& $this->_credential == $rootToken)
		{
			return new Piwik_Auth_Result(Piwik_Auth::SUCCESS_SUPERUSER_AUTH_CODE, $this->_identity );
		}

		if(is_null($this->_identity))
		{
			if($this->_credential === $rootToken)
			{
				return new Piwik_Auth_Result(Piwik_Auth::SUCCESS_SUPERUSER_AUTH_CODE, $rootLogin );
			}

			$login = Zend_Registry::get('db')->fetchOne(
						'SELECT login FROM '.Piwik::prefixTable('user').' WHERE token_auth = ?',
						array($this->_credential)
			);
			if($login !== false)
			{
				return new Piwik_Auth_Result(Zend_Auth_Result::SUCCESS, $login );
			}
			return new Piwik_Auth_Result( Zend_Auth_Result::FAILURE, $this->_identity );
		}

		// if not then we return the result of the database authentification provided by zend
		return parent::authenticate();
	}

	public function getTokenAuth()
	{
		return $this->_credential;
	}
}