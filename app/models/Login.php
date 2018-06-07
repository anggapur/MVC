<?php

namespace app\models;
use app\providers\Auth;

class Login extends MainModel {
   

    public static function checkLogin($data) {
        // $query = MainModel::getDB("SELECT * FROM `t_data`");    
        // return MainModel::makeArray($query);          

        $sql = "SELECT USER_ID,USERNAME,STATE FROM user WHERE";
        foreach ($data as $key => $value) {
             	if($value == array_values($data)[0])
             		$sql.=" ".$key." = '".$value."'";
             	else
             		$sql.=" AND ".$key." = '".$value."'";
             }             
        $query = MainModel::getQuery($sql);                   

        if(count($query)>0)
        {
        	$data = $query[0];        	
        	Auth::makeAuth($data);
        	return ['status' => 'success'];
        }
        else
        {
        	return ['status' => 'failed'];
        }
    }
}