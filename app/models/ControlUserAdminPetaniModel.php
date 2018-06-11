<?php
namespace app\models;

use app\providers\Auth;

class ControlUserAdminPetaniModel extends MainModel{
	public function testing()
	{
		$sql = "SELECT * FROM barang";
         return MainModel::getQuery($sql);
	}
	public function getListSatuanBarang() {
     $q = MainModel::getQuery("SELECT *
         FROM satuan");
      return $q;
	}
	public function getListSatuan() {
		 $q = MainModel::getQuery("SELECT * FROM hasil_panen INNER JOIN satuan ON hasil_panen.SATUAN_ID = satuan.SATUAN_ID
	INNER JOIN barang ON hasil_panen.BARANG_ID = barang.BARANG_ID;");
      return $q;
	}
	public function ambilBarangPetani($id)
   {
      $q = MainModel::getQuery("SELECT * FROM barang WHERE BARANG_ID = '$id'");
      return $q;
   }
    public function deleteBarangPetani2($id)
   {
         return MainModel::getDB("DELETE FROM satuan WHERE SATUAN_ID = '$id'");
   }
     public function updateBarangPetani($id,$username)
   {
      $q = MainModel::getDB("UPDATE barang SET BARANG_NAMA = '$username' WHERE BARANG_ID = '$id'");
      return $q;
   }
      public function insertSatuanBarang($satuan)
   {
      $waktu_buat = date('Y-m-d h:i:s');
      return MainModel::getDB("INSERT INTO satuan VALUES('','$satuan','$waktu_buat')");
   }
   public function insertBarang($barang)
   {
      $waktu_buat = date('Y-m-d h:i:s');
      return MainModel::getDB("INSERT INTO barang VALUES('','$barang','','$waktu_buat')");
   }
      public function insertHasilPanen($barang)
   {
      $waktu_buat = date('Y-m-d h:i:s');
      return MainModel::getDB("INSERT INTO hasil_panen VALUES('','$barang','','$waktu_buat')");
   }
     public function ambilSatuan($id)
   {
      $q = MainModel::getQuery("SELECT * FROM satuan WHERE SATUAN_ID = '$id'");
      return $q;
   }
      public function deleteSatuanBarang($id)
   {
         return MainModel::getDB("DELETE FROM satuan WHERE SATUAN_ID = '$id'");
   }
}