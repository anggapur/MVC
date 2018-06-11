<?php

namespace app\controllers;

use app\controllers\MainController;
use app\providers\Auth;
use app\providers\Url;
use app\models\ControlUserAdminPetaniModel;

class ControlAdminPetani extends MainController{
	public function saveBarang(){
  //   	$insert = ControlUserAdminPetaniModel::insertBarang($_POST['BARANG_NAMA']);
  //   	if($insert)    	
		// {
		// 	$_SESSION['status'] = "Sukses Create Data Barang";
		// 	$_SESSION['color'] = "success";
		// 	Url::redirectTo("AdminPetani/BarangPetani");
		// }

        $insert = ControlUserAdminPetaniModel::insertHasilTani($_POST);
        if($insert)     
        {
         $_SESSION['status'] = "Sukses Create Data Barang";
         $_SESSION['color'] = "success";
         Url::redirectTo("AdminPetani/BarangPetani");
        }

    }
	public function saveSatuan(){
    	$insert = ControlUserAdminPetaniModel::insertSatuanBarang($_POST['SATUAN_NAMA']);
    	if($insert)    	
		{
			$_SESSION['status'] = "Sukses Create Data Satuan";
			$_SESSION['color'] = "success";
			Url::redirectTo("AdminPetani/BarangPetani");
		}
    }
	 public function createSatuanBarang(){
        $data['titlePage'] = "Satuan";
    	$data['actionPage'] = "Create";    	
    	return $this->TemplateView("layout/templateBack","back/admin_petani/control_petani/create_satuan",$data);
    }
     public function editSatuan()
    {
    	$id = $_GET['id'];
    	$data['titlePage'] = "Satuan";
    	$data['actionPage'] = "Edit";    
    	$data['ambilData'] = ControlUserAdminPetaniModel::ambilSatuan($id)[0];    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/edit_satuan",$data);
    }
	    public function editBarangPetani()
    {
    	$id = $_GET['id'];
    	$data['titlePage'] = "Barang";
    	$data['actionPage'] = "Edit";    
    	$data['ambilData'] = ControlUserAdminPetaniModel::ambilBarangPetani($id)[0];    	
    	return $this->TemplateView("layout/templateBack","back/admin_petani/control_petani/edit_barang_petani",$data);
    }
     public function deleteBarangPetani()
    {
        $id = $_GET['id'];
        $delete = ControlUserAdminPetaniModel::deleteBarangPetani2($id);
        if($delete)
        {
            $_SESSION['status'] = "Sukses Hapus Data Barang";
            $_SESSION['color'] = "success";
            Url::redirectTo("AdminPetani/barang_petani");
        }
    }
       public function updateBarangPetani3()
    {
    	$id = $_GET['id'];
    	$update = ControlUserAdminPetaniModel::updateBarangPetani2($id,$_POST['BARANG_NAMA']);

    	if($update)
    	{
    		$_SESSION['status'] = "Sukses Update Data";
    		$_SESSION['color'] = "success";
    		Url::redirectTo("AdminPetani/barangPetani");
    	}	
    }
     public function createBarang()
        {
        $data['titlePage'] = "Barang";
    	$data['actionPage'] = "Create";    
        $data['listBarang'] = ControlUserAdminPetaniModel::listBarang();	
        $data['listSatuan'] = ControlUserAdminPetaniModel::listSatuan();
    	return $this->TemplateView("layout/templateBack","back/admin_petani/control_petani/create_barang",$data);
        }
     	public function deleteSatuan()
    {
        $id = $_GET['id'];
        $delete = ControlUserAdminPetaniModel::deleteSatuanBarang($id);
        if($delete)
        {
            $_SESSION['status'] = "Sukses Hapus Data Satuan";
            $_SESSION['color'] = "success";
            Url::redirectTo("AdminPetani/BarangPetani");
        }
    }
}


