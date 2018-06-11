<?php

namespace app\controllers;

use app\controllers\MainController;
use app\models\Pengguna;
use app\providers\Auth;
use app\providers\Url;
use app\models\frontModel;
use app\providers\Formating;


class Home extends MainController {
    public function index() {    	 	
        $data['data'] = "Angga Purnajiwa";        
        return $this->TemplateView("layout/templateFront","front/index",$data);
    }
    public function listPetani()
    {    	

    	$data['title'] = "List Petani";
        $page = 1;
        $dataPerPage = 4;
        $data['listPetani'] = frontModel::getListPetani($page,$dataPerPage);
    	return $this->TemplateView("layout/templateFront","front/listPetani",$data);
    }
    public function getApiListPetani()
    {
        $page = $_GET['id'];
        $dataPerPage = $_GET['ids'];
        echo json_encode(frontModel::getListPetani($page,$dataPerPage));
    }
     public function listBuahSayur()    
    {    	        
    	$data['title'] = "List Sayur & Buah";
        $page = 1;
        $dataPerPage = 4;
        $data['listBuahSayur'] = frontModel::getListBuahSayur($page,$dataPerPage);
    	return $this->TemplateView("layout/templateFront","front/listSayurBuah",$data);
    }
    public function getApiListBuahSayur()
    {
        $page = $_GET['id'];
        $dataPerPage = $_GET['ids'];
        echo json_encode(frontModel::getListBuahSayur($page,$dataPerPage));
    }
    public function loginAndRegister()
    {    	
        if(Auth::checkAuth())
        {
            return Url::redirectTo('Home/index');
        }
        else
        {
    	   $data['title'] = "List Sayur & Buah";
    	   return $this->TemplateView("layout/templateFront","front/loginAndRegister",$data);
        }
    }
    public function monitoringHarga()
    {    	
        $data['listHarga'] = frontModel::listHarga();
    	$data['title'] = "List Sayur & Buah";
    	return $this->TemplateView("layout/templateFront","front/monitoringHarga",$data);
    }
    public function musim()
    {    	
    	$data['title'] = "Musim";
        $data['listMusim'] = frontModel::listMusim();
        $data['listMusimAkan'] = frontModel::listMusimAkanDatang();
    	return $this->TemplateView("layout/templateFront","front/musim",$data);
    }
    public function DetailPetani()
    {
        $data['dataPetani'] = frontModel::dataPetani($_GET['id'])[0];   
        $data['listBarangDariPetani'] = frontModel::listBarangDariPetani($_GET['id']);
        return $this->TemplateView("layout/templateFront","front/DetailPetani",$data);   
    }
    public function DetailBuahSayur()
    {
        $data['listPetani'] = frontModel::listPetaniBerdasarkanBarang($_GET['id']);           
        $data['detailBarang'] = frontModel::cariBarang($_GET['id'])[0];
        return $this->TemplateView("layout/templateFront","front/DetailBuahSayur",$data);   
    }
    public function BuatTransaksi()
    {
        if(Auth::checkAuth() == FALSE)
        {
            echo json_encode(['status' => 'not-logged-in']);
        }
        else if($_SESSION['STATE_VERIF'] == "unverified")
        {
            echo json_encode(['status' => 'not-verified']);
        }
        else
        {
            $data = frontModel::detailHasilPanen($_GET['id'])[0];
            $data['HARGA_RP'] = Formating::moneyFormat($data['HARGA_SATUAN']);
            echo json_encode(['status' => 'success' , 'data' => $data]);   
        }
    }
    public function NotVerified()
    {
        return $this->TemplateView("layout/templateFront","front/NoAccess");   
    }
    public function BeliBarang()
    {
        $data = $_POST;
        $data['BARANG'] = frontModel::detailHasilPanen($_POST['HASILPANEN_ID'])[0];        
        return $this->TemplateView("layout/templateFront","front/beliBarang",$data);   
    }
    public function simpanPembelian()
    {
        $data = $_POST;
        $data['PEDAGANG_ID'] = $_SESSION['PEDAGANG_ID'];
        $data['STATUS_PENGIRIMAN'] = 0;
        $data['STATUS_PEMBAYARAN'] = 0;
        $q = frontModel::savePembelian($data);
        if($q)
        {
            $_SESSION['alert']['state'] = 'keranjang';
            $_SESSION['alert']['color'] = 'success';
            $_SESSION['alert']['status'] = 'Barang Berhasil Ditambahkan Ke Keranjang';
            Url::redirectTo('Home/Keranjang');
        }
    }
    public function keranjang()
    {
        Auth::checkAuthorization();
        $data['dataKeranjang'] = frontModel::listDataKeranjang($_SESSION['PEDAGANG_ID']);
        // echo json_encode($data['dataKeranjang']);
        return $this->TemplateView("layout/templateFront","front/keranjang",$data);
    }
    public function DetailHasilPanen()
    {
        $data['detailHasilPanen'] = frontModel::detailHasilPanen($_GET['id'])[0];   
        $data['fotoHasilPanen'] = frontModel::fotoHasilPanen($_GET['id']);
        // echo json_encode($data['detailHasilPanen']);
        return $this->TemplateView("layout/templateFront","front/detailHasilPanen",$data);  
    }
    public function pencarian()
    {
        $data['title'] = "Hasil Pencarian : ".$_POST['search'];
        $data['hasilPencarianPetani'] = frontModel::pencarianPetani($_POST['search']);
        // echo json_encode($data['hasilPencarianPetani']);
        return $this->TemplateView("layout/templateFront","front/pencarian",$data);  
    }
}