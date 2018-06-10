<?php

namespace app\models;
use app\providers\Auth;

class Login extends MainModel {
   

    public static function checkLogin($data) {
        // $query = MainModel::getDB("SELECT * FROM `t_data`");    
        // return MainModel::makeArray($query);          

        $sql = "SELECT USER_ID,USERNAME,STATE,STATE_VERIF FROM user WHERE";
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

    public function checkEmailUsed($email)
    {
        $sql = "SELECT * FROM user WHERE EMAIL = '$email'";
        $query = MainModel::getQuery($sql);
        if(count($query) > 0)
            return ['status' => 'used'];
        else
            return ['status' => 'unused'];
    }
    public function insertToUser($data_user)
    {
        extract($data_user);
        $WAKTU_BUAT = date('Y-m-d h:i:s');
        $sql = "INSERT INTO user VALUES('','$USERNAME','$PASSWORD','$EMAIL','$STATE','$STATE_VERIF','','$WAKTU_BUAT')";
        return MainModel::getDB($sql);        
    }
    public function findEmail($email)
    {
        $sql = "SELECT USER_ID,USERNAME,STATE,STATE_VERIF FROM user WHERE EMAIL = '$email'";
        $query = MainModel::getQuery($sql);
        return $query;
    }
    public function insertToIdentitasPetani($dataIdentitas)
    {
        extract($dataIdentitas);
         $sql = "INSERT INTO identitas_petani VALUES('','$USER_ID','','$NAMA','','$PHONE','','','','$JENIS_KELAMIN','$TANGGAL_LAHIR','$WAKTU_BUAT')";
        return MainModel::getQuery($sql);    
    }
    public function insertToIdentitasPedagang($dataIdentitas)
    {
        extract($dataIdentitas);
        $DATE = date('Y-m-d h:i:s');
         $sql = "INSERT INTO `identitas_pedagang` VALUES ('', '$USER_ID', '', '', '', '$PHONE', '$NAMA', '','','', '$JENIS_KELAMIN','$TANGGAL_LAHIR', '$DATE')";
        return MainModel::getQuery($sql);    
    }

    public function updateDataIdentitasPetani($data,$user_id)
    {
        extract($data);
        $sql = "UPDATE identitas_petani SET KTP = '$KTP', ALAMAT = '$ALAMAT', PROVINSI = '$PROVINSI' , KECAMATAN = '$KECAMATAN' , KOTA = '$KOTA' WHERE USER_ID = '$user_id'";
        return MainModel::getDB($sql);
    }
    public function updateDataIdentitasPedagang($data,$user_id)
    {
        extract($data);
        $sql = "UPDATE identitas_pedagang SET NO_KTP = '$NO_KTP', ALAMAT = '$ALAMAT', NAMA_TOKO = '$NAMA_TOKO',PROVINSI = '$PROVINSI' , KECAMATAN = '$KECAMATAN' , KOTA = '$KOTA' WHERE USER_ID = '$user_id'";
        return MainModel::getDB($sql);
    }
    public function getUserIdentitasPetani($user_id)
    {

        $sql = "SELECT * FROM identitas_petani WHERE USER_ID = '$user_id'";
        $query = MainModel::getQuery($sql);
        return $query; 
    }
    public function getUserIdentitasPedagang($user_id)
    {

        $sql = "SELECT * FROM identitas_pedagang WHERE USER_ID = '$user_id'";
        $query = MainModel::getQuery($sql);
        return $query; 
    }
}