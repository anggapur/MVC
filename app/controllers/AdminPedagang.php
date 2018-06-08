<?php

namespace app\controllers;

use app\controllers\MainController;
use app\models\Pengguna;
use app\providers\Auth;

class AdminPedagang extends MainController {
    public function EditJubel() {

    	 	
        $data['data'] = "Angga Purnajiwa";        

        return $this->TemplateView("layout/templateBack","back/admin_pedagang/EditJubel",$data);
    }
    
}