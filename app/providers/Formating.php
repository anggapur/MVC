<?php

namespace app\providers;


abstract class Formating {
    public function moneyFormat($money)
    {
        return "Rp ".number_format($money,0,',','.');          
    }
}