<?php

namespace app\controllers;

use app\controllers\MainController;
use app\models\Pengguna;
use app\providers\Auth;

class AdminUtama extends MainController {
    public function dashboard() {
        return $this->TemplateView("layout/templateBack","back/admin_utama/index");        
    }    
    public function laporan(){
    	return $this->TemplateView("layout/templateBack","back/admin_utama/laporan");
    }
    public function barang(){
    	return $this->TemplateView("layout/templateBack","back/admin_utama/barang");
    }
    public function displayProfile(){
    	return $this->TemplateView("layout/templateBack","back/admin_utama/display_profile");
    }
    public function editProfile(){
    	return $this->TemplateView("layout/templateBack","back/admin_utama/edit_profile");
    }
    public function login(){
    	return $this->TemplateView("layout/templateBack","back/admin_utama/login");
    }
    public function musim(){
    	return $this->TemplateView("layout/templateBack","back/admin_utama/musim");
    }
    public function verifikasiUser(){
    	return $this->TemplateView("layout/templateBack","back/admin_utama/verifikasi_user");
    }
}