<?php

namespace app\controllers;

use app\models\ControlUserAdminPetaniModel;
use app\controllers\MainController;
use app\models\Pengguna;
use app\providers\Auth;
use app\providers\Url;

class AdminPetani extends MainController {
	 public function dashboard() {
        Auth::checkAuthorization(['petani']);
        return $this->TemplateView("layout/templateBack","back/admin_petani/index");        
    }   
    public function LaporanStok() {
        return $this->TemplateView("layout/templateBack","back/admin_petani/Laporan_stok");        
    }   
    public function BarangPetani(){
        $data['listUser'] = ControlUserAdminPetaniModel::getListSatuanBarang();
        $data['listBarang'] = ControlUserAdminPetaniModel::getListSatuan();     
        $data['titlePage'] = "Barang";
        $data['actionPage'] = "List"; 
        $data['listHasilPanen'] =ControlUserAdminPetaniModel::getDataHasilPanen($_SESSION['PETANI_ID']);
        
    	 return $this->TemplateView("layout/templateBack","back/admin_petani/barang_petani",$data);
    } 
    public function hapusHasilPanen()
    {
        $id=$_GET['id'];
        $q=ControlUserAdminPetaniModel::hapusHasilPanen($id);
        
        if($q)     
        {
         $_SESSION['status'] = "Sukses Hapus Data Barang";
         $_SESSION['color'] = "danger";
         Url::redirectTo("AdminPetani/BarangPetani");
        }
    }
}