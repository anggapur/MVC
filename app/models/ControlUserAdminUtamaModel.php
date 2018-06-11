<?php
namespace app\models;

use app\providers\Auth;

class ControlUserAdminUtamaModel extends MainModel {
   public function getListUser($param)
   {
      Auth::checkAuthorization(['admin']);
   	//get query akan memberikan output array
   	$q = MainModel::getQuery("SELECT * FROM user WHERE STATE != '".$param."' AND STATE_VERIF = 'verified'");
   	return $q;
   }
   public function getListVerifUser($param)
   {
      Auth::checkAuthorization(['admin']);
      //get query akan memberikan output array
      $q = MainModel::getQuery("SELECT * FROM user WHERE STATE != '".$param."' AND STATE_VERIF = 'unverified'");
      return $q;
   }
   public function getListAdmin($param)
   {
      Auth::checkAuthorization(['admin']);
      //get query akan memberikan output array
      $q = MainModel::getQuery("SELECT * FROM user WHERE STATE = '".$param."'");
      return $q;
   }
   public function insertUser($username,$password,$email,$state,$stateVerif)
   {
      Auth::checkAuthorization(['admin']);
   	$waktu_buat = date('Y-m-d h:i:s');
   	return MainModel::getDB("INSERT INTO user VALUES('','$username','$password','$email','$state','$stateVerif','$waktu_buat')");
   }
   public function deleteUser($id)
   {
      Auth::checkAuthorization(['admin']);
   		return MainModel::getDB("DELETE FROM user WHERE USER_ID = '$id'");
   }
   public function ambilUser($id)
   {
      Auth::checkAuthorization(['admin']);
   	$q = MainModel::getQuery("SELECT * FROM user WHERE USER_ID = '$id'");
   	return $q;
   }
   public function updateUser($id,$username,$password,$email,$state,$stateVerif)
   {
      Auth::checkAuthorization(['admin']);
   	$q = MainModel::getDB("UPDATE user SET USERNAME = '$username',PASSWORD = md5('$password'),EMAIL = '$email',STATE = '$state',STATE_VERIF = '$stateVerif' WHERE USER_ID = '$id'");
   	return $q;
   }
   public function updateProfileAdmin($id,$username,$password,$email)
   {
      Auth::checkAuthorization(['admin']);
      $q = MainModel::getDB("UPDATE user SET USERNAME = '$username',PASSWORD = md5('$password'),EMAIL = '$email' WHERE USER_ID = '$id'");
      return $q;
   }
   public function updateVerifikasi($id)
   {
      Auth::checkAuthorization(['admin']);
      $q = MainModel::getDB("UPDATE user SET STATE_VERIF = 'verified' WHERE USER_ID = '$id'");
      return $q;
   }
   //untuk tampilan laporan pada admin utama
   public function getListLaporan(){
      Auth::checkAuthorization(['admin']);
      $q = MainModel::getQuery("SELECT barang.BARANG_NAMA a,identitas_petani.NAMA b,identitas_pedagang.NAMA c,
      transaksi.METODE_PENGIRIMAN d,transaksi.HARGA_SATUAN e,transaksi.JUMLAH f,
      satuan.SATUAN_NAMA g,transaksi.STATUS_PENGIRIMAN h,transaksi.STATUS_PEMBAYARAN i,
      transaksi.WAKTU_BUAT j FROM transaksi INNER JOIN hasil_panen ON
      transaksi.HASILPANEN_ID = hasil_panen.HASILPANEN_ID
      INNER JOIN barang ON barang.BARANG_ID = hasil_panen.BARANG_ID
      INNER JOIN identitas_pedagang ON identitas_pedagang.PEDAGANG_ID = transaksi.PEDAGANG_ID
      INNER JOIN identitas_petani ON identitas_petani.PETANI_ID = hasil_panen.PETANI_ID
      INNER JOIN satuan ON satuan.SATUAN_ID = transaksi.SATUAN_ID;");
      return $q;
   }
   public function getListMusim(){
      Auth::checkAuthorization(['admin']);
      $q = MainModel::getQuery("SELECT * FROM musim;");
      return $q;
   }

   // untuk file admin utama barang
   public function getListSatuanBarang(){
      Auth::checkAuthorization(['admin']);
      $q = MainModel::getQuery("SELECT *
         FROM barang;");
      return $q;
   }
   public function getListSatuan(){
      Auth::checkAuthorization(['admin']);
      $q = MainModel::getQuery("SELECT *
         FROM satuan;");
      return $q;
   }
   public function deleteSatuanBarang($id)
   {
      Auth::checkAuthorization(['admin']);
         return MainModel::getDB("DELETE FROM satuan WHERE SATUAN_ID = '$id'");
   }
   public function deleteBarangPetani($id)
   {
      Auth::checkAuthorization(['admin']);
         return MainModel::getDB("DELETE FROM barang WHERE BARANG_ID = '$id'");
   }
   public function deleteMusim($id)
   {
      Auth::checkAuthorization(['admin']);
         return MainModel::getDB("DELETE FROM musim WHERE MUSIM_ID = '$id'");
   }
   public function insertSatuanBarang($satuan)
   {
      Auth::checkAuthorization(['admin']);
      $waktu_buat = date('Y-m-d h:i:s');
      return MainModel::getDB("INSERT INTO satuan VALUES('','$satuan','$waktu_buat')");
   }
   public function insertBarang($barang)
   {
      Auth::checkAuthorization(['admin']);
      $waktu_buat = date('Y-m-d h:i:s');
      return MainModel::getDB("INSERT INTO barang VALUES('','$barang','','$waktu_buat')");
   }
   public function ambilSatuan($id)
   {
      Auth::checkAuthorization(['admin']);
      $q = MainModel::getQuery("SELECT * FROM satuan WHERE SATUAN_ID = '$id'");
      return $q;
   }
   public function ambilBarang($id)
   {
      Auth::checkAuthorization(['admin']);
      $q = MainModel::getQuery("SELECT * FROM barang WHERE BARANG_ID = '$id'");
      return $q;
   }
   public function ambilMusim($id)
   {
      Auth::checkAuthorization(['admin']);
      $q = MainModel::getQuery("SELECT * FROM musim WHERE MUSIM_ID = '$id'");
      return $q;
   }
   public function updateSatuan($id,$username)
   {
      Auth::checkAuthorization(['admin']);
      $q = MainModel::getDB("UPDATE satuan SET SATUAN_NAMA = '$username' WHERE SATUAN_ID = '$id'");
      return $q;
   }
   public function updateBarangPetani($id,$username)
   {
      Auth::checkAuthorization(['admin']);
      $q = MainModel::getDB("UPDATE barang SET BARANG_NAMA = '$username' WHERE BARANG_ID = '$id'");
      return $q;
   }

   //untuk file musim
   public function insertMusim($musim,$awal,$akhir)
   {
      Auth::checkAuthorization(['admin']);
      return MainModel::getDB("INSERT INTO musim VALUES('','$musim','$awal','$akhir')");
   }
   public function updateMusimAdmin($id,$nama_musim,$awal_musim,$akhir_musim)
   {
      Auth::checkAuthorization(['admin']);
      $q = MainModel::getDB("UPDATE musim SET NAMA_MUSIM = '$nama_musim',AWAL_MUSIM = '$awal_musim',AKHIR_MUSIM = '$akhir_musim' WHERE MUSIM_ID = '$id'");
      return $q;
   }
}