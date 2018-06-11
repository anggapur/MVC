<?php

    namespace app\models;

    abstract class MainModel {
    	
    	//Dari Dari buat db
        protected function getDB($query) {
            $con =  new \PDO("mysql:host=localhost;dbname=db_jubeltani",
                        "root","");
            return $con->query($query);
        }
        //selanjutnya buat array
        protected function makeArray($q)
        {
        	return $q->fetchAll(\PDO::FETCH_ASSOC);
        }
        //Langsung ke array
       	public function getQuery($query) {
            $con =  new \PDO("mysql:host=localhost;dbname=db_jubeltani",
                        "root","");
            return $con->query($query)->fetchAll(\PDO::FETCH_ASSOC);
        }
    }