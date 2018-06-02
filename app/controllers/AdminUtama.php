<?php

namespace app\controllers;

use app\controllers\MainController;
use app\models\Pengguna;
use app\providers\Auth;

class AdminUtama extends MainController {
    public function dashboard() {
        return $this->TemplateView("layout/templateBack","back/admin_utama/index");        
    }    
}