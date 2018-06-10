<?php

namespace app\controllers;

use app\controllers\MainController;
use app\models\Pengguna;
use app\providers\Auth;

class AdminPedagang extends MainController {
     public function dashboard() {
        return $this->TemplateView("layout/templateBack","back/admin_pedagang/index");        
    }   
    public function EditJubel() {

    	 	
        $data['data'] = "Angga Purnajiwa";        

<<<<<<< HEAD
        return $this->TemplateView("layout/templateBack","back/admin_pedagang/EditJubel",$data);
    }
    
=======
        return $this->TemplateView("layout/templateback","back/admin_pedagang/EditJubel",$data);
    }

    public function PembelianJUBEL(){
        $data['data'] = "Angga Purnajiwa";        

        return $this->TemplateView("layout/templateback","back/admin_pedagang/PembelianJUBEL",$data);
    }

    public function TawarJUBEL(){
        $data['data'] = "Angga Purnajiwa";        

        return $this->TemplateView("layout/templateback","back/admin_pedagang/TawarJUBEL",$data);
    }

    public function transaksiJUBEL(){
        $data['data'] = "Angga Purnajiwa";        

        return $this->TemplateView("layout/templateback","back/admin_pedagang/transaksiJUBEL",$data);
    }
>>>>>>> 09cb533dd0cb90bcaf9a3c37ca575b45a852e3a5
}