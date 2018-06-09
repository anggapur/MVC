<?php

namespace app\controllers;

use app\controllers\MainController;
// use app\models\Pengguna;
use app\providers\Auth;
use app\providers\Url;
use app\models\ControlUserModel;

class AdminUtama extends MainController {
    public function dashboard() {
        $data['listUser'] = ControlUserModel::getListUser("admin");     
        $data['titlePage'] = "Dashboard";
        $data['actionPage'] = "List";

        return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/index",$data);  
    }    
    public function laporan(){
        // $data['listUser'] = ControlUserModel::getListUser("admin");     
        // $data['titlePage'] = "Laporan";
        // $data['actionPage'] = "List"; 

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
    public function musim(){
    	return $this->TemplateView("layout/templateBack","back/admin_utama/musim");
    }
    public function verifikasiUser(){
    	return $this->TemplateView("layout/templateBack","back/admin_utama/verifikasi_user");
    }
}