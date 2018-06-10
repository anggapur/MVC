<?php

namespace app\controllers;

use app\controllers\MainController;
use app\providers\Auth;
use app\providers\Url;
use app\models\ControlPedagangModel;

class ControlPedagang extends MainController {
    //INI DIGUNAKAN
     public function edit()
     {
        Auth::checkAuthorization(['pedagang']);
        $id = $_SESSION['USER_ID'];
        //$id = 4;
        $data['titlePage'] = "Control Pedagang";
        $data['actionPage'] = "Edit";
        $data['ambilPedagang'] = ControlPedagangModel::ambilPedagang($id)[0];    
        return $this->TemplateView("layout/templateBack","back/admin_pedagang/control_pedagang/edit",$data);
    }
    public function update()
    {
        Auth::checkAuthorization(['pedagang']);
        $id = $_SESSION['USER_ID'];
        $update = ControlPedagangModel::updatePedagang($id,$_POST['NAMA_TOKO'],$_POST['ALAMAT'],$_POST['NO_KTP'],$_POST['PHONE'],$_POST['NAMA'],$_POST['KECAMATAN'],$_POST['KOTA']);

        if($update)
        {
            $_SESSION['status'] = "Sukses Update Data";
            $_SESSION['color'] = "success";
            Url::redirectTo("ControlPedagang/edit");
        }
        
    }

//DIGUNAKAN
    public function laporanTransaksi(){
        Auth::checkAuthorization(['pedagang']);
        $id = $_SESSION['USER_ID'];
        $data['listUser'] = ControlPedagangModel::ambilBelanjaan("$id");     
        $data['titlePage'] = "Control Pedagang";
        $data['actionPage'] = "List";               
        return $this->TemplateView("layout/templateBack","back/admin_pedagang/control_pedagang/dataPembelian",$data);   
    }

    public function pencarianData(){
        Auth::checkAuthorization(['pedagang']);
         $tanggal_awal = $_POST['TANGGAL_AWAL'];
         $tanggal_akhir = $_POST['TANGGAL_AKHIR'];
        $data['titlePage'] = "Control Pedagang";
         $data['actionPage'] = "List";               
      $data['listUser'] = ControlPedagangModel::cariData($tanggal_awal,$tanggal_akhir); 
// //$cari = ControlPedagangModel::cariData($_POST['TANGGAL_AWAL'],$_POST['TANGGAL_AKHIR']);
        return $this->TemplateView("layout/templateBack","back/admin_pedagang/control_pedagang/dataPembelian",$data);
    }
    public function tampilanPencarianTransaksi()
    {            
         Auth::checkAuthorization(['pedagang']);
        $data['titlePage'] = "Control Pedagang";
        $data['actionPage'] = "List";               
        return $this->TemplateView("layout/templateBack","back/admin_pedagang/control_pedagang/pencarianTransaksi",$data);
    }

   public function
    transaksi() {       
        $data['listUser'] = ControlPedagangModel::getListPedagang("pedagang");     
        $data['titlePage'] = "Control Pedagang";
        $data['actionPage'] = "List";               
        return $this->TemplateView("layout/templateBack","back/admin_pedagang/control_pedagang/dataPembelian",$data);                
    }  
    
    public function tambahBelanjaan(){
        $insert = ControlPedagangModel::insertBarang($_POST['TRANSAKSI_ID'],$_POST['HASILPANEN_ID'],$_POST['METODE_PENGIRIMAN'], $_POST['HARGA_SATUAN'],$_POST['JUMLAH'],$_POST['SATUAN_ID'],$_POST['STATUS_PENGIRIMAN'],$_POST['STATUS_PEMBAYARAN']);
        if($insert)     
            {
                $_SESSION['status'] = "Sukses Tambah Barang";
                $_SESSION['color'] = "success";
                Url::redirectTo("ControlPedagang/tambahBarang");
            }
        //$data['titlePage'] = "Control Pedagang";
        //$data['actionPage'] = "Create";     
        //return $this->TemplateView("layout/templateBack","back/admin_pedagang/control_pedagang/tambahBarang",$data);
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



     
}