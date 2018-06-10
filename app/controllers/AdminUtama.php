<?php

namespace app\controllers;

use app\models\ControlUserAdminUtamaModel;
use app\controllers\MainController;
use app\providers\Auth;
use app\providers\Url;

class AdminUtama extends MainController {
    public function dashboard() {
        $data['listUser'] = ControlUserAdminUtamaModel::getListUser("admin");     
        $data['titlePage'] = "Dashboard";
        $data['actionPage'] = "List";

        return $this->TemplateView("layout/templateBack","back/admin_utama/index",$data);  
    }    
    public function laporan(){
        $data['listUser'] = ControlUserAdminUtamaModel::getListLaporan();     
        $data['titlePage'] = "Laporan";
        $data['actionPage'] = "List"; 

    	return $this->TemplateView("layout/templateBack","back/admin_utama/laporan",$data);
    }
    public function barang(){
        $data['listUser'] = ControlUserAdminUtamaModel::getListSatuanBarang();
        $data['listBarang'] = ControlUserAdminUtamaModel::getListSatuan();     
        $data['titlePage'] = "Barang";
        $data['actionPage'] = "List"; 
    	return $this->TemplateView("layout/templateBack","back/admin_utama/barang",$data);
    }
    
    public function displayProfile(){
    	return $this->TemplateView("layout/templateBack","back/admin_utama/display_profile");
    }
    public function editProfile(){
    	return $this->TemplateView("layout/templateBack","back/admin_utama/edit_profile");
    }
    public function musim(){
        $data['listUser'] = ControlUserAdminUtamaModel::getListMusim();     
        $data['titlePage'] = "Musim";
        $data['actionPage'] = "List"; 
    	return $this->TemplateView("layout/templateBack","back/admin_utama/musim",$data);
    }
    public function verifikasiUser(){
    	return $this->TemplateView("layout/templateBack","back/admin_utama/verifikasi_user");
    }

}