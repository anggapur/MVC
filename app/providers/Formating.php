<?php

namespace app\providers;


abstract class Formating {
    public function moneyFormat($money)
    {
        return "Rp ".number_format($money,0,',','.');          
    }
    public function dayFormat($data,$format)
    {
    	$time = strtotime($data);
		$newformat = date($format,$time);
		return $newformat;

    }	
}