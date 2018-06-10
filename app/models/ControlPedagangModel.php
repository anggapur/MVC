<?php

namespace app\models;
use app\providers\Auth;
class ControlPedagangrModel extends MainModel {
	public function getListPedagang()
   {
   	//get query akan memberikan output array
   	$q = MainModel::getQuery("SELECT * FROM transaksi");
   	return $q;
   }

   public function ambilBelanjaan($id)
   {
   	$q = MainModel::getQuery("SELECT TRANSAKSI_ID,HASILPANEN_ID, METODE_PENGIRIMAN, HARGA_SATUAN,JUMLAH, SATUAN_ID, STATUS_PENGIRIMAN, STATUS_PEMBAYARAN, WAKTU from traansaksi where USER_ID = '$id'");
   }

   public function editBelanjaan($id,$transaksi_id, $hasilpanen_id, $metode_pengiriman,$harga_satuan,$jumlah,$satuan_id,$status_pengiriman,$status_pembayaran)
   {
   		$q = MainModel::getDB("UPDATE transaksi SET TRANSAKSI_ID = '$transaksi_id',HASILPANEN_ID = '$hasilpanen_id', METODE_PENGIRIMAN = '$metode_pengiriman', HARGA_SATUAN = '$harga_satuan', JUMLAH = '$jumlah', SATUAN_ID = '$satuan_id', STATUS_PEMBAYARAN = '$status_pembayaran', STATUS_PENGIRIMAN = '$status_pengiriman' WHERE USER_ID = '$id'");
   	return $q;
   }

   public function deleteBelanjaan($id)
   {
   		 	$q = MainModel::getDB("DELETE  FROM transaksi WHERE USER_ID = '$id'");
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

