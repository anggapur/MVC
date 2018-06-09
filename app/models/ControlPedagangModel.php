<?php

namespace app\models;
use app\providers\Auth;
class ControlPedagangrModel extends MainModel {
	public function getListUser()
   {
   	//get query akan memberikan output array
   	$q = MainModel::getQuery("SELECT * FROM barang");
   	return $q;
   }
   public function ambilPedagang($id)
   {
   	$q = MainModel::getQuery("SELECT NAMA_TOKO,ALAMAT,NO_KTP,PHONE,NAMA,KECAMATAN,KOTA FROM identitas_pedagang WHERE USER_ID = '$id'");
   	return $q;
   }
   public function updatePedagang($id,$nama_toko,$alamat,$no_ktp,$phone,$nama,$kecamatan,$kota)
   {
   	$q = MainModel::getDB("UPDATE identitas_pedagang SET NAMA_TOKO = '$nama_toko',ALAMAT = '$alamat', NO_KTP = '$no_ktp', PHONE = '$phone', NAMA = '$nama', KECAMATAN = '$kecamatan', KOTA = '$kota' WHERE USER_ID = '$id'");
   	return $q;
   }
}

