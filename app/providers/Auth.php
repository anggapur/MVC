<?php

namespace app\providers;


abstract class Auth {
    public function checkAuth()
    {
        if(empty($_SESSION['id']) || $_SESSION['id'] == "")
            return FALSE;
        else
            return TRUE;
    }
}