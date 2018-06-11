<?php

namespace app\controllers;

use app\controllers\MainController;
use app\providers\Auth;

class ControlHasilPanen extends MainController {
    public function create() {
        $data['titlePage'] = "Barang";
        $data['actionPage'] = "List"; 
    	return $this->TemplateView("layout/templateBack","back/admin_petani/barang_petani",$data);     
    }    
}