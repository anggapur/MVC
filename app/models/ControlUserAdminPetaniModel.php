<?php
namespace app\models;

use app\providers\Auth;

class ControlUserAdminPetaniModel extends MainModel{
   public function getDataHasilPanen($user_id)
   {
      $sql= "SELECT hasil_panen.*,identitas_petani.*,satuan.*,barang.*,user.PHOTO_PROFIL,
         (SELECT SUM(JUMLAH) FROM transaksi WHERE transaksi.HASILPANEN_ID = hasil_panen.HASILPANEN_ID) as sudahDibeli,
(hasil_panen.JUMLAH - (SELECT SUM(JUMLAH) FROM transaksi WHERE transaksi.HASILPANEN_ID = hasil_panen.HASILPANEN_ID)) as sisa FROM hasil_panen
            LEFT JOIN identitas_petani ON hasil_panen.PETANI_ID = identitas_petani.PETANI_ID
            LEFT JOIN satuan ON hasil_panen.SATUAN_ID = satuan.SATUAN_ID   
            LEFT JOIN user ON identitas_petani.USER_ID = user.USER_ID
            LEFT JOIN barang ON hasil_panen.BARANG_ID=barang.BARANG_ID
            WHERE hasil_panen.PETANI_ID = '$user_id'
            ORDER BY hasil_panen.WAKTU_BUAT DESC";
      return MainModel::getQuery($sql);
   }
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
   public function listBarang()
   {
      $sql = "SELECT *FROM barang";
      return MainModel::getQuery($sql);
   }
   public function listSatuan()
   {
      $sql = "SELECT *FROM satuan";
      return MainModel::getQuery($sql);
   }
   public function insertHasilTani($data)
   {
      extract($data);
      $PETANI_ID = $_SESSION['PETANI_ID'];
      $WAKTU = date('Y-m-d h:i:s');
      $sql="INSERT hasil_panen SET BARANG_ID='$BARANG_ID',PETANI_ID='$PETANI_ID',JUMLAH='$JUMLAH',SATUAN_ID='$SATUAN_ID',HARGA_SATUAN='$HARGA_SATUAN',WAKTU_BUAT='$WAKTU'";
      return MainModel::getDB($sql);
   }
   public function hapusHasilPanen($id)
   {
      $sql ="DELETE FROM hasil_panen WHERE HASILPANEN_ID= '$id'";
      return MainModel::getDB($sql);
   }
}