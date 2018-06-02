<?php

namespace app\models;


class Pengguna extends MainModel {
   

    public static function getPengguna() {
        // $query = MainModel::getDB("SELECT * FROM `t_data`");    
        // return MainModel::makeArray($query);       
        return MainModel::getQuery("SELECT * FROM `t_data`");           
    }
}