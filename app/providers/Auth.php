<?php

namespace app\providers;
use app\providers\Url;

class Auth {
	public $loginPage = "home/loginAndRegister";
    public function checkAuth()
    {
        if(empty($_SESSION['USER_ID']) || $_SESSION['USER_ID'] == "")
            return FALSE;
        else
            return TRUE;
    }
    //Membuat Session
    public function makeAuth($data)
    {
    	foreach ($data as $key => $value) {
    		$_SESSION[$key] = $value;
    	}
    }
    //lgoout
    public function logout()
    {
    	session_destroy();
    	$urlClass = new Auth();
    	Url::redirectTo($urlClass->loginPage);
    }
    //Mengecek untuk otoritas, parameternya ['admin','pedagang','petani']
    public function checkAuthorization($state = NULL)
    {
    	if(empty($_SESSION['USER_ID']) || $_SESSION['USER_ID'] == "")            
            Url::redirectTo('home/loginAndRegister');
        if($state !== NULL)
        {
        	if(!in_array($_SESSION['STATE'],$state))
        		Url::redirectTo('home/loginAndRegister');

        }
    }
}