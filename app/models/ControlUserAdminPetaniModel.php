<?php
namespace app\models;

use app\providers\Auth;

class ControlUserAdminPetaniModel extends MainModel{
	public function testing()
	{
		$sql = "SELECT * FROM barang";
         return MainModel::getQuery($sql);
	}
	// public function getListSatuanBarang() {
 //     $q = MainModel::getQuery("SELECT *
 //         FROM barang");
 //      return $q;
	// }
	// public function getListSatuan() {
	// 	 $q = MainModel::getQuery("SELECT * FROM hasil_panen INNER JOIN satuan ON hasil_panen.SATUAN_ID = satuan.SATUAN_ID
	// INNER JOIN barang ON hasil_panen.BARANG_ID = barang.BARANG_ID;");
 //      return $q;
	// }
}