<?php

namespace app\controllers;

use app\models\ControlUserAdminUtamaModel;
use app\controllers\MainController;
use app\providers\Auth;
use app\providers\Url;

class AdminUtama extends MainController {
    public function dashboard() {
        Auth::checkAuthorization(['admin']);
        $data['listUser'] = ControlUserAdminUtamaModel::getListUser("admin");     
        $data['titlePage'] = "Dashboard";
        $data['actionPage'] = "List";

        return $this->TemplateView("layout/templateBack","back/admin_utama/index",$data);  
    }    
    public function laporan(){
        Auth::checkAuthorization(['admin']);
        $data['listUser'] = ControlUserAdminUtamaModel::getListLaporan();     
        $data['titlePage'] = "Laporan";
        $data['actionPage'] = "List"; 

    	return $this->TemplateView("layout/templateBack","back/admin_utama/laporan",$data);
    }
    public function barang(){
        Auth::checkAuthorization(['admin']);
        $data['listUser'] = ControlUserAdminUtamaModel::getListSatuanBarang();
        $data['listBarang'] = ControlUserAdminUtamaModel::getListSatuan();     
        $data['titlePage'] = "Barang";
        $data['actionPage'] = "List"; 
    	return $this->TemplateView("layout/templateBack","back/admin_utama/barang",$data);
    }
    
    public function displayProfile(){
        Auth::checkAuthorization(['admin']);
        $data['listUser'] = ControlUserAdminUtamaModel::getListAdmin("admin");     
        $data['titlePage'] = "AdminUtama";
        $data['actionPage'] = "Data";
    	return $this->TemplateView("layout/templateBack","back/admin_utama/display_profile",$data);
    }
    // public function editProfile(){
    //     $data['listUser'] = ControlUserAdminUtamaModel::getListAdmin('admin');     
    //     $data['titlePage'] = "AdminUtama";
    //     $data['actionPage'] = "Data";
    // 	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/edit_profile",$data);
    // }
    public function musim(){
        Auth::checkAuthorization(['admin']);
        $data['listUser'] = ControlUserAdminUtamaModel::getListMusim();     
        $data['titlePage'] = "Musim";
        $data['actionPage'] = "List"; 
    	return $this->TemplateView("layout/templateBack","back/admin_utama/musim",$data);
    }
    public function verifikasiUser(){
        Auth::checkAuthorization(['admin']);
        $data['listUser'] = ControlUserAdminUtamaModel::getListVerifUser("admin");     
        $data['titlePage'] = "Verifikasi User";
        $data['actionPage'] = "List";

    	return $this->TemplateView("layout/templateBack","back/admin_utama/verifikasi_user",$data);
    }

}