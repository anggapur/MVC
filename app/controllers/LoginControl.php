<?php

namespace app\controllers;

use app\controllers\MainController;
use app\providers\Auth;
use app\providers\Url;
use app\models\Login;

class LoginControl extends MainController {
    public function login() {
    	$data['USERNAME'] = $this->post['username'];
    	$data['PASSWORD'] = md5($this->post['password']);    	
        $queryLogin = Login::checkLogin($data);
        if($queryLogin['status'] == "success")
        {
            if($_SESSION['STATE'] == 'admin')
                Url::redirectTo('AdminUtama/dashboard');
            else if($_SESSION['STATE'] == 'pedagang')
                Url::redirectTo('AdminPedagang/dashboard');
            else if($_SESSION['STATE'] == 'petani')
                Url::redirectTo('AdminPetani/dashboard');
        }
        else
        {
            $_SESSION['alert']['state'] = 'login';
            $_SESSION['alert']['color'] = 'danger';
            $_SESSION['alert']['status'] = 'Maaf,Akun Anda Tidak Terdaftar';
            Url::redirectTo('Home/loginAndRegister');
        }
    }    
    public function logout() {
    	Auth::logout();     
    }    
    public function cekSession()
    {
    	print_r($_SESSION);
        
        //echo $_SESSION['USER_ID']; mengambil id dari user login
    }
    public function pageCekAuth()
    {
    	Auth::checkAuthorization();    	
    }
    public function register()
    {        
        //cek kesamaan password
        if($_POST['PASSWORD'] !== $_POST['CONF_PASSWORD'])
        {
            $_SESSION['alert']['state'] = 'register';
            $_SESSION['alert']['color'] = 'danger';
            $_SESSION['alert']['status'] = 'Password Dan Conf Password Tidak Sama';
            Url::redirectTo('Home/loginAndRegister');
        }
        //cek email apakag sudah digunakan
        $cekEmail = Login::checkEmailUsed($_POST['EMAIL'])['status'];
        if($cekEmail == "used")
        {
            $_SESSION['alert']['state'] = 'register';
            $_SESSION['alert']['color'] = 'danger';
            $_SESSION['alert']['status'] = 'Email Telah Digunakan';
            Url::redirectTo('Home/loginAndRegister');
        }
        // Memasukan Data ke Tabel User
        $data_user['USERNAME'] = $_POST['USERNAME'];
        $data_user['PASSWORD'] = md5($_POST['PASSWORD']);
        $data_user['EMAIL'] = $_POST['EMAIL'];
        $data_user['STATE'] = $_POST['STATE'];
        $data_user['STATE_VERIF'] = "unverified" ;
        $query = Login::insertToUser($data_user);
        //find by email
        $findEmail = Login::findEmail($_POST['EMAIL']);        
        Auth::makeAuth($findEmail[0]);
        //
        $dataIdentitas['USER_ID'] = $_SESSION['USER_ID'];
        $dataIdentitas['NAMA'] = $_POST['NAMA'];
        $dataIdentitas['PHONE'] = $_POST['PHONE'];
        $dataIdentitas['JENIS_KELAMIN'] = $_POST['JENIS_KELAMIN'];
        $dataIdentitas['TANGGAL_LAHIR'] = $_POST['TANGGAL_LAHIR'];
        $dataIdentitas['WAKTU_BUAT'] = date('Y-m-d h:i:s');
        if($_POST['STATE'] == "petani")   
            $query = Login::insertToIdentitasPetani($dataIdentitas);
        else
            $query = Login::insertToIdentitasPedagang($dataIdentitas);

        //view fill data
        Url::redirectTo('LoginControl/fillData');
    }
    public function fillData()
    {
        //Dapatkan user
        if($_SESSION['STATE'] == 'petani')
        {
            $getUser = Login::getUserIdentitasPetani($_SESSION['USER_ID'])[0];
            if($getUser['KTP'] !== "")
                Url::redirectTo('AdminPetani/dashboard');
        }
        else
        {
            $getUser = Login::getUserIdentitasPedagang($_SESSION['USER_ID'])[0];            
            echo $getUser['NAMA_TOKO'];
            if($getUser['NAMA_TOKO'] !== "")                                
                Url::redirectTo('AdminPedagang/dashboard');
        }
        
        // Jika User telah terverifikasi tidak bisa mengakses halaman ini
        if($_SESSION['STATE_VERIF'] == "verified")
        {            
            if($_SESSION['STATE'] == 'pedagang')
                Url::redirectTo('AdminPedagang/dashboard');
            else if($_SESSION['STATE'] == 'petani')
                Url::redirectTo('AdminPetani/dashboard');
        }        
        $data['headerShow'] = "hide";
        return $this->TemplateView("layout/templateFront","front/fillData",$data);
    }

    public function submitDataPetani()
    {
        
        $data = $_POST;
        $query = Login::updateDataIdentitasPetani($data,$_SESSION['USER_ID']);
        if($query)
            Url::redirectTo('AdminPetani/dashboard');
        else
            echo "Gagal";
    }

    public function submitDataPedagang()
    {
        
        $data = $_POST;
        $query = Login::updateDataIdentitasPedagang($data,$_SESSION['USER_ID']);
        if($query)
            Url::redirectTo('AdminPedagang/dashboard');
        else
            echo "Gagal";
    }

}