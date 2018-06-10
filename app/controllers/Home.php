<?php

namespace app\controllers;

use app\controllers\MainController;
use app\models\Pengguna;
use app\providers\Auth;
use app\providers\Url;
use app\models\frontModel;


class Home extends MainController {
    public function index() {    	 	
        $data['data'] = "Angga Purnajiwa";        
        return $this->TemplateView("layout/templateFront","front/index",$data);
    }
    public function listPetani()
    {    	

    	$data['title'] = "List Petani";
        $page = 1;
        $dataPerPage = 2;
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
        $dataPerPage = 1;
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
            echo json_encode(['status' => 'not-logged-in']);
    }
    public function NotVerified()
    {
        return $this->TemplateView("layout/templateFront","front/NoAccess");   
    }
}