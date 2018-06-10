<?php
namespace app\models;

use app\providers\Auth;

class ControlUserModel extends MainModel {
   public function getListUser($param)
   {
   	//get query akan memberikan output array
   	$q = MainModel::getQuery("SELECT * FROM user WHERE STATE != '".$param."'");
   	return $q;
   }
   public function insertUser($username,$password,$state)
   {
   	$waktu_buat = date('Y-m-d h:i:s');
   	return MainModel::getDB("INSERT INTO user VALUES('','$username','$password','$state','$waktu_buat')");
   }
   public function deleteUser($id)
   {
   		return MainModel::getDB("DELETE FROM user WHERE USER_ID = '$id'");
   }
   public function ambilUser($id)
   {
   	$q = MainModel::getQuery("SELECT * FROM user WHERE USER_ID = '$id'");
   	return $q;
   }
   public function updateUser($id,$username,$password,$state)
   {
   	$q = MainModel::getDB("UPDATE user SET USERNAME = '$username',PASSWORD = '$password',STATE = '$state' WHERE USER_ID = '$id'");
   	return $q;
   }