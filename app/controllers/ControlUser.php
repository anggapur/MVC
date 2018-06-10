<?php

namespace app\controllers;

use app\controllers\MainController;
use app\providers\Auth;
use app\providers\Url;
use app\models\ControlUserModel;

class ControlUser extends MainController {
    public function index() {    	
    	$data['listUser'] = ControlUserModel::getListUser("admin");    	
    	$data['titlePage'] = "Control User";
    	$data['actionPage'] = "List";    	    	
    	
        return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/index",$data);               
    }    
    public function create()
    {
    	$data['titlePage'] = "Control User";
    	$data['actionPage'] = "Create";    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/create",$data);
    }
    public function save()
    {    	
    	$insert = ControlUserModel::insertUser($_POST['USERNAME'],$_POST['PASSWORD'],$_POST['STATE']);
    	if($insert)    	
    		{
    			$_SESSION['status'] = "Sukses Create Data";
    			$_SESSION['color'] = "success";
    			Url::redirectTo("ControlUser/index");
    		}

    }
    public function delete()
    {
    	$id = $_GET['id'];
    	$delete = ControlUserModel::deleteUser($id);
    	if($delete)
    	{
    		$_SESSION['status'] = "Sukses Hapus Data";
    		$_SESSION['color'] = "success";
    		Url::redirectTo("ControlUser/index");
    	}
    }
    public function edit()
    {
    	$id = $_GET['id'];
    	$data['titlePage'] = "Control User";
    	$data['actionPage'] = "Edit";    
    	$data['ambilData'] = ControlUserModel::ambilUser($id)[0];    	
    	return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/edit",$data);
    }
    public function update()
    {
    	$id = $_GET['id'];
    	$update = ControlUserModel::updateUser($id,$_POST['USERNAME'],$_POST['PASSWORD'],$_POST['STATE']);

    	if($update)
    	{
    		$_SESSION['status'] = "Sukses Update Data";
    		$_SESSION['color'] = "success";
    		Url::redirectTo("ControlUser/index");
    	}
    	
    }
}