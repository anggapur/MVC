<?php

namespace app\models;
use app\providers\Auth;

class frontModel extends MainModel {
   public function getListPetani($page,$dataPerPage)
   {
   		$pages = ($page-1)*$dataPerPage;
   		$sql = "SELECT identitas_petani.*,user.STATE_VERIF FROM identitas_petani
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
}