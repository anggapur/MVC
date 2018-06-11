<?php

namespace app\controllers;

use app\models\ControlUserAdminPetaniModel;
use app\controllers\MainController;
use app\models\Pengguna;
use app\providers\Auth;

class AdminPetani extends MainController {
	 public function dashboard() {
        Auth::checkAuthorization(['petani']);
        return $this->TemplateView("layout/templateBack","back/admin_petani/index");        
    }   
    public function LaporanStok() {
        return $this->TemplateView("layout/templateBack","back/admin_petani/Laporan_stok");        
    }   
    public function BarangPetani(){
    	  
    	 echo json_encode(ControlUserAdminPetaniModel::testing());
        $data['titlePage'] = "Barang";
        $data['actionPage'] = "List"; 
    	// return $this->TemplateView("layout/templateBack","back/admin_petani/barang_petani",$data);
    } 
}