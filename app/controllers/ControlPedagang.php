<?php

namespace app\controllers;

use app\controllers\MainController;
use app\providers\Auth;
use app\providers\Url;
use app\models\ControlPedagangModel;

class ControlPedagang extends MainController {
/*    public function datatransaksi(){
        public function index() {       
        $data['listUser'] = ControlUserModel::getListUser("admin");     
        $data['titlePage'] = "Control User";
        $data['actionPage'] = "List";               
        
        return $this->TemplateView("layout/templateBack","back/admin_utama/control_user/index",$data);                
    }   
    } */

    public function transaksi() {       
        $data['listUser'] = ControlPedagangModel::getListPedagang("pedagang");     
        $data['titlePage'] = "Control Pedagang";
        $data['actionPage'] = "List";               
        return $this->TemplateView("layout/templateBack","back/admin_pedagang/control_pedagang/dataPembelian",$data);                
    }  

    public function updateBelanjaan(){
        $id = $_SESSION['id'];
        $data['titlePage'] = "Control Pedagang";
        $data['actionPage'] = "Edit";
        $data['ambilData'] = ControlPedagangModel:: ambilBelanjaan($id)[0];    
        return $this->TemplateView("layout/templateBack","back/admin_pedagang/control_pedagang/editBelanjaan",$data);
    }

    public function deleteBelanjaan(){
        $id = $_GET['id'];
        $delete = ControlPedagangModel::deleteBelanjaan($id);
        if($delete)
        {
            $_SESSION['status'] = "Sukses Hapus Data";
            $_SESSION['color'] = "danger";
            Url::redirectTo("ControlUser/index");
        }
    }

     public function edit()
     {
        $id = $_SESSION['USER_ID'];
        //$id = 4;
        $data['titlePage'] = "Control Pedagang";
        $data['actionPage'] = "Edit";
        $data['ambilPedagang'] = ControlPedagangModel::ambilPedagang($id)[0];    
        return $this->TemplateView("layout/templateBack","back/admin_pedagang/control_pedagang/edit",$data);
    }
    public function update()
    {
        $id = $_SESSION['USER_ID'];
        $update = ControlPedagangModel::updatePedagang($id,$_POST['NAMA_TOKO'],$_POST['ALAMAT'],$_POST['NO_KTP'],$_POST['PHONE'],$_POST['NAMA'],$_POST['KECAMATAN'],$_POST['KOTA']);

        if($update)
        {
            $_SESSION['status'] = "Sukses Update Data";
            $_SESSION['color'] = "success";
            Url::redirectTo("ControlUser/index");
        }
        
    }
     
}