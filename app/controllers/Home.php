<?php

namespace app\controllers;

use app\controllers\MainController;
use app\models\Pengguna;
use app\providers\Auth;

class Home extends MainController {
    public function index() {

    	$data['content'] = Pengguna::getPengguna();    	
        $data['data'] = "Angga Purnajiwa";        

        return $this->TemplateView("layout/templateFront","front/index",$data);
    }
    public function listPedagang()
    {    	
    	$data['title'] = "List Pedagang";
    	return $this->TemplateView("layout/templateFront","front/listPedagang",$data);
    }
     public function listBuahSayur()
    {    	
    	$data['title'] = "List Sayur & Buah";
    	return $this->TemplateView("layout/templateFront","front/listSayurBuah",$data);
    }
    public function loginAndRegister()
    {    	
    	$data['title'] = "List Sayur & Buah";
    	return $this->TemplateView("layout/templateFront","front/loginAndRegister",$data);
    }
    public function monitoringHarga()
    {    	
    	$data['title'] = "List Sayur & Buah";
    	return $this->TemplateView("layout/templateFront","front/monitoringHarga",$data);
    }
    public function musim()
    {    	

    	$data['title'] = "Musim";
    	return $this->TemplateView("layout/templateFront","front/musim",$data);
    }
}