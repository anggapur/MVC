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
}