<?php

namespace app\controllers;

use app\controllers\MainController;
use app\models\Pengguna;
use app\providers\Auth;

class AdminPetani extends MainController {
	 public function dashboard() {
        return $this->TemplateView("layout/templateBack","back/admin_petani/index");        
    }   
    public function LaporanStok() {
        return $this->TemplateView("layout/templateBack","back/admin_petani/Laporan_stok");        
    }   
    public function BarangPetani(){
    	return $this->TemplateView("layout/templateBack","back/admin_petani/barang_petani");
    } 
}