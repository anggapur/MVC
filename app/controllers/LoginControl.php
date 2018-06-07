<?php

namespace app\controllers;

use app\controllers\MainController;
use app\providers\Auth;
use app\models\Login;

class LoginControl extends MainController {
    public function login() {
    	$data['USERNAME'] = $this->post['username'];
    	$data['PASSWORD'] = md5($this->post['password']);    	
        $queryLogin = Login::checkLogin($data);
        echo json_encode($queryLogin);        
    }    
    public function logout() {
    	Auth::logout();     
    }    
    public function cekSession()
    {
    	print_r($_SESSION);
    }
    public function pageCekAuth()
    {
    	Auth::checkAuthorization();    	
    }

}