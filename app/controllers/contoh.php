<?php

namespace app\controllers;

use app\controllers\MainController;
use app\providers\Auth;

class contoh extends MainController {
    public function index() {
        return $this->TemplateView("layout/templateBack","back/admin_utama/index");        
    }    
}