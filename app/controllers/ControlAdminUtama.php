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
    	Auth::checkAuthorization(['admin']);
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
    	Auth::checkAuthorization(['admin']);
        $id = $_GET['id'];
        $delete = ControlUserAdminUtamaModel::deleteBarangPetani($id);
        if($delete)
        {
            $_SESSION['status'] = "Sukses Hapus Data Barang";
            $_SESSION['color'] = "success";
            Url::redirectTo("AdminUtama/barang");
        }
    }
    public function deleteMusim()
    {
<<<<<<< HEAD
=======
    	Auth::checkAuthorization(['admin']);
>>>>>>> 55d4ecf420f66935014d017c65ac4af05ced5a9c
        $id = $_GET['id'];
        $delete = ControlUserAdminUtamaModel::deleteMusim($id);
        if($delete)
        {
            $_SESSION['status'] = "Sukses Hapus Data Musim";
            $_SESSION['color'] = "success";
            Url::redirectTo("AdminUtama/musim");
        }
    }
    public function createSatuanBarang(){
    	Auth::checkAuthorization(['admin']);
        $data['titlePage'] = "Satuan";
    	$data['actionPage'] = "Create";    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/create_satuan",$data);
    }
    public function createBarang(){
    	Auth::checkAuthorization(['admin']);
        $data['titlePage'] = "Barang";
    	$data['actionPage'] = "Create";    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/create_barang",$data);
    }
    public function createMusim(){
    	Auth::checkAuthorization(['admin']);
        $data['titlePage'] = "Musim";
    	$data['actionPage'] = "Create";    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/create_musim",$data);
    }
    public function saveSatuan(){
    	Auth::checkAuthorization(['admin']);
    	$insert = ControlUserAdminUtamaModel::insertSatuanBarang($_POST['SATUAN_NAMA']);
    	if($insert)    	
		{
			$_SESSION['status'] = "Sukses Create Data Satuan";
			$_SESSION['color'] = "success";
			Url::redirectTo("AdminUtama/barang");
		}
    }
    public function saveBarang(){
    	Auth::checkAuthorization(['admin']);
    	$insert = ControlUserAdminUtamaModel::insertBarang($_POST['BARANG_NAMA']);
    	if($insert)    	
		{
			$_SESSION['status'] = "Sukses Create Data Barang";
			$_SESSION['color'] = "success";
			Url::redirectTo("AdminUtama/barang");
		}
    }
    public function saveMusim(){
<<<<<<< HEAD
=======
    	Auth::checkAuthorization(['admin']);
>>>>>>> 55d4ecf420f66935014d017c65ac4af05ced5a9c
    	$insert = ControlUserAdminUtamaModel::insertMusim($_POST['NAMA_MUSIM'],$_POST['AWAL_MUSIM'],$_POST['AKHIR_MUSIM']);
    	if($insert)    	
		{
			$_SESSION['status'] = "Sukses Create Data Musim";
			$_SESSION['color'] = "success";
			Url::redirectTo("AdminUtama/musim");
		}
    }
    public function editSatuan()
    {
    	Auth::checkAuthorization(['admin']);
    	$id = $_GET['id'];
    	$data['titlePage'] = "Satuan";
    	$data['actionPage'] = "Edit";    
    	$data['ambilData'] = ControlUserAdminUtamaModel::ambilSatuan($id)[0];    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/edit_satuan",$data);
    }
    public function editBarang()
    {
    	Auth::checkAuthorization(['admin']);
    	$id = $_GET['id'];
    	$data['titlePage'] = "Barang";
    	$data['actionPage'] = "Edit";    
    	$data['ambilData'] = ControlUserAdminUtamaModel::ambilBarang($id)[0];    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/edit_barang",$data);
    }
    public function editMusim()
    {
<<<<<<< HEAD
=======
    	Auth::checkAuthorization(['admin']);
>>>>>>> 55d4ecf420f66935014d017c65ac4af05ced5a9c
    	$id = $_GET['id'];
    	$data['titlePage'] = "Musim";
    	$data['actionPage'] = "Edit";    
    	$data['ambilData'] = ControlUserAdminUtamaModel::ambilMusim($id)[0];    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/edit_musim",$data);
    }
<<<<<<< HEAD
=======
    public function editProfile()
    {
    	Auth::checkAuthorization(['admin']);
    	$id = $_SESSION['USER_ID'];
    	$data['titlePage'] = "Profile";
    	$data['actionPage'] = "Edit";    
    	$data['ambilData'] = ControlUserAdminUtamaModel::ambilUser($id)[0]; 
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/edit_profile",$data);
    }
>>>>>>> 55d4ecf420f66935014d017c65ac4af05ced5a9c
    public function updateSatuan()
    {
    	Auth::checkAuthorization(['admin']);
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
    	Auth::checkAuthorization(['admin']);
    	$id = $_GET['id'];
    	$update = ControlUserAdminUtamaModel::updateBarangPetani($id,$_POST['BARANG_NAMA']);

    	if($update)
    	{
    		$_SESSION['status'] = "Sukses Update Data";
    		$_SESSION['color'] = "success";
    		Url::redirectTo("AdminUtama/barang");
    	}
    	
    }
    public function updateMusim()
    {
<<<<<<< HEAD
=======
    	Auth::checkAuthorization(['admin']);
>>>>>>> 55d4ecf420f66935014d017c65ac4af05ced5a9c
    	$id = $_GET['id'];
    	$update = ControlUserAdminUtamaModel::updateMusimAdmin($id,$_POST['NAMA_MUSIM'],$_POST['AWAL_MUSIM'],$_POST['AKHIR_MUSIM']);

    	if($update)
    	{
    		$_SESSION['status'] = "Sukses Update Data";
    		$_SESSION['color'] = "success";
<<<<<<< HEAD
    		Url::redirectTo("AdminUtama/musim");
=======
    		Url::redirectTo("AdminUtama/displayProfile");
    	}
    	
    }
    public function updateProfile()
    {
    	Auth::checkAuthorization(['admin']);
    	$id = $_GET['id'];
    	$update = ControlUserAdminUtamaModel::updateProfileAdmin($id,$_POST['USERNAME'],$_POST['PASSWORD'],$_POST['EMAIL']);

    	if($update)
    	{
    		$_SESSION['status'] = "Sukses Update Data";
    		$_SESSION['color'] = "success";
    		Url::redirectTo("AdminUtama/displayProfile");
    	}
    	
    }
    public function updateVerifikasiUser()
    {
    	Auth::checkAuthorization(['admin']);
    	$id = $_GET['id'];
    	$update = ControlUserAdminUtamaModel::updateVerifikasi($id);

    	if($update)
    	{
    		$_SESSION['status'] = "Sukses Update Data";
    		$_SESSION['color'] = "success";
    		Url::redirectTo("AdminUtama/verifikasiUser");
>>>>>>> 55d4ecf420f66935014d017c65ac4af05ced5a9c
    	}
    	
    }

    // control pada dashboard
    public function create()
    {
    	Auth::checkAuthorization(['admin']);
    	$data['titlePage'] = "Dashboard";
    	$data['actionPage'] = "Create";    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/create",$data);
    }
    public function save()
    {    	
    	Auth::checkAuthorization(['admin']);
    	$insert = ControlUserAdminUtamaModel::insertUser($_POST['USERNAME'],$_POST['PASSWORD'],$_POST['EMAIL'],$_POST['STATE'],$_POST['STATE_VERIF']);
    	if($insert)    	
    		{
    			$_SESSION['status'] = "Sukses Create Data";
    			$_SESSION['color'] = "success";
    			Url::redirectTo("AdminUtama/dashboard");
    		}
    }
    public function delete()
    {
    	Auth::checkAuthorization(['admin']);
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
    	Auth::checkAuthorization(['admin']);
    	$id = $_GET['id'];
    	$data['titlePage'] = "Dashboard";
    	$data['actionPage'] = "Edit";    
    	$data['ambilData'] = ControlUserAdminUtamaModel::ambilUser($id)[0];    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/edit",$data);
    }
    public function update()
    {
    	Auth::checkAuthorization(['admin']);
    	$id = $_GET['id'];
    	$update = ControlUserAdminUtamaModel::updateUser($id,$_POST['USERNAME'],$_POST['PASSWORD'],$_POST['EMAIL'],$_POST['STATE'],$_POST['STATE_VERIF']);
    	print_r($update);
    	if($update)
    	{
    		$_SESSION['status'] = "Sukses Update Data";
    		$_SESSION['color'] = "success";
    		Url::redirectTo("AdminUtama/dashboard");
    	}
    	
    }
}