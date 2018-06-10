<?php

namespace app\controllers;

use app\controllers\MainController;
use app\providers\Auth;
use app\providers\Url;
use app\models\ControlUserAdminUtamaModel;

class ControlAdminUtama extends MainController{
	//untuk file barang
	public function deleteSatuan()
    {
        $id = $_GET['id'];
        $delete = ControlUserAdminUtamaModel::deleteSatuanBarang($id);
        if($delete)
        {
            $_SESSION['status'] = "Sukses Hapus Data Satuan";
            $_SESSION['color'] = "success";
            Url::redirectTo("AdminUtama/barang");
        }
    }
    public function deleteBarang()
    {
        $id = $_GET['id'];
        $delete = ControlUserAdminUtamaModel::deleteBarangPetani($id);
        if($delete)
        {
            $_SESSION['status'] = "Sukses Hapus Data Barang";
            $_SESSION['color'] = "success";
            Url::redirectTo("AdminUtama/barang");
        }
    }
    public function createSatuanBarang(){
        $data['titlePage'] = "Satuan";
    	$data['actionPage'] = "Create";    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/create_satuan",$data);
    }
    public function createBarang(){
        $data['titlePage'] = "Barang";
    	$data['actionPage'] = "Create";    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/create_barang",$data);
    }
    public function createMusim(){
        $data['titlePage'] = "Musim";
    	$data['actionPage'] = "Create";    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/create_musim",$data);
    }
    public function saveSatuan(){
    	$insert = ControlUserAdminUtamaModel::insertSatuanBarang($_POST['SATUAN_NAMA']);
    	if($insert)    	
		{
			$_SESSION['status'] = "Sukses Create Data Satuan";
			$_SESSION['color'] = "success";
			Url::redirectTo("AdminUtama/barang");
		}
    }
    public function saveBarang(){
    	$insert = ControlUserAdminUtamaModel::insertBarang($_POST['BARANG_NAMA']);
    	if($insert)    	
		{
			$_SESSION['status'] = "Sukses Create Data Barang";
			$_SESSION['color'] = "success";
			Url::redirectTo("AdminUtama/barang");
		}
    }
    public function editSatuan()
    {
    	$id = $_GET['id'];
    	$data['titlePage'] = "Satuan";
    	$data['actionPage'] = "Edit";    
    	$data['ambilData'] = ControlUserAdminUtamaModel::ambilSatuan($id)[0];    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/edit_satuan",$data);
    }
    public function editBarang()
    {
    	$id = $_GET['id'];
    	$data['titlePage'] = "Barang";
    	$data['actionPage'] = "Edit";    
    	$data['ambilData'] = ControlUserAdminUtamaModel::ambilBarang($id)[0];    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/edit_barang",$data);
    }
    public function updateSatuan()
    {
    	$id = $_GET['id'];
    	$update = ControlUserAdminUtamaModel::updateSatuan($id,$_POST['SATUAN_NAMA']);

    	if($update)
    	{
    		$_SESSION['status'] = "Sukses Update Data";
    		$_SESSION['color'] = "success";
    		Url::redirectTo("AdminUtama/barang");
    	}
    	
    }
    public function updateBarang()
    {
    	$id = $_GET['id'];
    	$update = ControlUserAdminUtamaModel::updateBarangPetani($id,$_POST['BARANG_NAMA']);

    	if($update)
    	{
    		$_SESSION['status'] = "Sukses Update Data";
    		$_SESSION['color'] = "success";
    		Url::redirectTo("AdminUtama/barang");
    	}
    	
    }

    // control pada dashboard
    public function create()
    {
    	$data['titlePage'] = "Dashboard";
    	$data['actionPage'] = "Create";    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/create",$data);
    }
    public function save()
    {    	
    	$insert = ControlUserAdminUtamaModel::insertUser($_POST['USERNAME'],$_POST['PASSWORD'],$_POST['STATE']);
    	if($insert)    	
    		{
    			$_SESSION['status'] = "Sukses Create Data";
    			$_SESSION['color'] = "success";
    			Url::redirectTo("AdminUtama/dashboard");
    		}
    }
    public function delete()
    {
    	$id = $_GET['id'];
    	$delete = ControlUserAdminUtamaModel::deleteUser($id);
    	if($delete)
    	{
    		$_SESSION['status'] = "Sukses Hapus Data";
    		$_SESSION['color'] = "success";
    		Url::redirectTo("AdminUtama/dashboard");
    	}
    }
    public function edit()
    {
    	$id = $_GET['id'];
    	$data['titlePage'] = "Dashboard";
    	$data['actionPage'] = "Edit";    
    	$data['ambilData'] = ControlUserAdminUtamaModel::ambilUser($id)[0];    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/edit",$data);
    }
    public function update()
    {
    	$id = $_GET['id'];
    	$update = ControlUserAdminUtamaModel::updateUser($id,$_POST['USERNAME'],$_POST['PASSWORD'],$_POST['STATE']);

    	if($update)
    	{
    		$_SESSION['status'] = "Sukses Update Data";
    		$_SESSION['color'] = "success";
    		Url::redirectTo("AdminUtama/dashboard");
    	}
    	
    }
}