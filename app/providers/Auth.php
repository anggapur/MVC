<?php

namespace app\providers;
use app\providers\Url;
use app\models\MainModel;

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

            if($_SESSION['STATE'] == 'petani')
            {
                $q = MainModel::getQuery("SELECT * FROM identitas_petani WHERE USER_ID = '".$_SESSION['USER_ID']."'")[0];
                if($q['KTP'] == "" || empty($q['KTP']))
                    Url::redirectTo('LoginControl\fillData');

            }
            else if($_SESSION['STATE'] == 'pedagang')
            {
                $q = MainModel::getQuery("SELECT * FROM identitas_pedagang WHERE USER_ID = '".$_SESSION['USER_ID']."'")[0];
                if($q['NAMA_TOKO'] == "" || empty($q['NAMA_TOKO']))
                    Url::redirectTo('LoginControl\fillData');
            }

            if($_SESSION['STATE_VERIF'] == "unverified")
                Url::redirectTo('Home\NotVerified');
        }
    }
}