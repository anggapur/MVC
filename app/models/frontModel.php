<?php

namespace app\models;
use app\providers\Auth;

class frontModel extends MainModel {
   public function getListPetani($page,$dataPerPage)
   {
   		$pages = ($page-1)*$dataPerPage;
   		$sql = "SELECT identitas_petani.*,user.STATE_VERIF,user.PHOTO_PROFIL FROM identitas_petani
		JOIN user ON identitas_petani.USER_ID = user.USER_ID		
		WHERE user.STATE_VERIF = 'verified'
		ORDER BY NAMA ASC
		LIMIT $pages,$dataPerPage
		";
		return MainModel::getQuery($sql);
   }
   public function getListBuahSayur($page,$dataPerPage)
   {
   		$pages = ($page-1)*$dataPerPage;
   		$sql = "SELECT * FROM barang
		ORDER BY BARANG_NAMA ASC
		LIMIT $pages,$dataPerPage
		";
		return MainModel::getQuery($sql);
   }
   public function dataPetani($id)
   {	
   		$sql = "SELECT *,
(SELECT COUNT(*) FROM hasil_panen WHERE hasil_panen.PETANI_ID = identitas_petani.PETANI_ID) as JumlahPost 
FROM identitas_petani WHERE PETANI_ID ='$id'";
   		$q = MainModel::getQuery($sql);
   		return $q;
   }
   public function listMusim()
   {
		$sql = "SELECT * FROM musim 
		WHERE AWAL_MUSIM <= curdate() && AKHIR_MUSIM >= curdate();
		ORDER BY AWAL_MUSIM DESC";
		$q = MainModel::getQuery($sql);
		return $q;
   }
    public function listMusimAkanDatang()
   {
		$sql = "SELECT * FROM musim 
		WHERE AWAL_MUSIM > curdate();
		ORDER BY AWAL_MUSIM DESC";
		$q = MainModel::getQuery($sql);
		return $q;
   }

   public function listHarga()
   {
   	$sql = 'SELECT *,
		(SELECT sum(HARGA_SATUAN) FROM hasil_panen WHERE WAKTU_BUAT = curdate() AND hasil_panen.BARANG_ID = barang.BARANG_ID)
		/
		(SELECT count(HARGA_SATUAN) FROM hasil_panen WHERE WAKTU_BUAT = curdate() AND hasil_panen.BARANG_ID = barang.BARANG_ID) as rataHariIni 
		,
		(SELECT sum(HARGA_SATUAN) FROM hasil_panen WHERE WAKTU_BUAT >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY
		AND WAKTU_BUAT <= curdate() AND hasil_panen.BARANG_ID = barang.BARANG_ID)
		/
		(SELECT count(HARGA_SATUAN) FROM hasil_panen WHERE WAKTU_BUAT >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY
		AND WAKTU_BUAT <= curdate() AND hasil_panen.BARANG_ID = barang.BARANG_ID) as rataMingguIni 
		,
		(SELECT sum(HARGA_SATUAN) FROM hasil_panen WHERE WAKTU_BUAT = curdate() - INTERVAL DAYOFWEEK(curdate())+0 DAY AND hasil_panen.BARANG_ID = barang.BARANG_ID)
		/
		(SELECT count(HARGA_SATUAN) FROM hasil_panen WHERE WAKTU_BUAT = curdate() - INTERVAL DAYOFWEEK(curdate())+0 DAY AND hasil_panen.BARANG_ID = barang.BARANG_ID) as rataKemarin
		FROM barang';
		$q = MainModel::getQuery($sql);
		return $q;
   }
   public function listBarangDariPetani($user_id)
   {
   		$sql = "SELECT hasil_panen.*,barang.*,satuan.*,
(SELECT SUM(JUMLAH) FROM transaksi WHERE transaksi.HASILPANEN_ID = hasil_panen.HASILPANEN_ID) as sudahDibeli,
(hasil_panen.JUMLAH - (SELECT SUM(JUMLAH) FROM transaksi WHERE transaksi.HASILPANEN_ID = hasil_panen.HASILPANEN_ID)) as sisa
FROM hasil_panen
				LEFT JOIN barang ON hasil_panen.BARANG_ID = barang.BARANG_ID 
				LEFT JOIN satuan ON hasil_panen.SATUAN_ID = satuan.SATUAN_ID				
				WHERE hasil_panen.PETANI_ID = '$user_id'
				ORDER BY hasil_panen.WAKTU_BUAT DESC";
		$q = MainModel::getQuery($sql);
		return $q;
   }
   public function listPetaniBerdasarkanBarang($id)
   {
   		$sql = "SELECT hasil_panen.*,identitas_petani.*,satuan.*,user.PHOTO_PROFIL,
   		(SELECT SUM(JUMLAH) FROM transaksi WHERE transaksi.HASILPANEN_ID = hasil_panen.HASILPANEN_ID) as sudahDibeli,
(hasil_panen.JUMLAH - (SELECT SUM(JUMLAH) FROM transaksi WHERE transaksi.HASILPANEN_ID = hasil_panen.HASILPANEN_ID)) as sisa FROM hasil_panen
				LEFT JOIN identitas_petani ON hasil_panen.PETANI_ID = identitas_petani.PETANI_ID
				LEFT JOIN satuan ON hasil_panen.SATUAN_ID = satuan.SATUAN_ID	
				LEFT JOIN user ON identitas_petani.USER_ID = user.USER_ID
				WHERE hasil_panen.BARANG_ID = '$id'
				ORDER BY hasil_panen.WAKTU_BUAT DESC";
		$q = MainModel::getQuery($sql);
		return $q;
   }

   public function detailHasilPanen($id)
   {
   		$sql = "SELECT hasil_panen.*,identitas_petani.*,satuan.*,user.PHOTO_PROFIL,barang.*,
   		(SELECT SUM(JUMLAH) FROM transaksi WHERE transaksi.HASILPANEN_ID = hasil_panen.HASILPANEN_ID) as sudahDibeli,
(hasil_panen.JUMLAH - (SELECT SUM(JUMLAH) FROM transaksi WHERE transaksi.HASILPANEN_ID = hasil_panen.HASILPANEN_ID)) as sisa FROM hasil_panen
				LEFT JOIN identitas_petani ON hasil_panen.PETANI_ID = identitas_petani.PETANI_ID
				LEFT JOIN satuan ON hasil_panen.SATUAN_ID = satuan.SATUAN_ID	
				LEFT JOIN user ON identitas_petani.USER_ID = user.USER_ID
				LEFT JOIN barang ON hasil_panen.BARANG_ID = barang.BARANG_ID 
				WHERE hasil_panen.HASILPANEN_ID = '$id'
				ORDER BY hasil_panen.WAKTU_BUAT DESC";
		$q = MainModel::getQuery($sql);
		return $q;
   }
   public function cariBarang($id)
   {
   		$sql = "SELECT * FROM barang WHERE BARANG_ID = '$id'";
   		$q = MainModel::getQuery($sql);
   		return $q;
   }
   public function savePembelian($data)
   {
   		extract($data);
   		$WAKTU_BUAT = date('Y-m-d h:i:s');
   		$sql =  "INSERT INTO transaksi VALUES('','$HASILPANEN_ID','$PEDAGANG_ID','$METODE_PENGIRIMAN','$HARGA_SATUAN','$JUMLAH','$SATUAN_ID','$STATUS_PENGIRIMAN','$STATUS_PEMBAYARAN','$WAKTU_BUAT')";
   		return MainModel::getDB($sql);
   }
   public function listDataKeranjang($PEDAGANG_ID)
   {
		$sql = "SELECT transaksi.JUMLAH, transaksi.METODE_PENGIRIMAN,transaksi.STATUS_PENGIRIMAN,transaksi.STATUS_PEMBAYARAN,transaksi.HARGA_SATUAN,barang.BARANG_NAMA,barang.BARANG_THUMBNAIL,satuan.SATUAN_NAMA,identitas_petani.NAMA,identitas_petani.PETANI_ID FROM transaksi
		LEFT JOIN hasil_panen ON transaksi.HASILPANEN_ID = hasil_panen.HASILPANEN_ID
		LEFT JOIN barang ON hasil_panen.BARANG_ID = barang.BARANG_ID
		LEFT JOIN satuan ON hasil_panen.SATUAN_ID = satuan.SATUAN_ID
		LEFT JOIN identitas_petani On hasil_panen.PETANI_ID = identitas_petani.PETANI_ID
		WHERE transaksi.PEDAGANG_ID='$PEDAGANG_ID'
		ORDER BY STATUS_PEMBAYARAN ASC, transaksi.WAKTU_BUAT DESC";
		return MainModel::getQuery($sql);
   }
   public function fotoHasilPanen($HASILPANEN_ID)
   {
   		$sql = "SELECT * FROM hasil_panen_foto WHERE HASILPANEN_ID = '$HASILPANEN_ID'";
   		$q = MainModel::getQuery($sql);
   		return $q;
   }
}