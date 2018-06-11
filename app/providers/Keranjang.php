<?php

namespace app\providers;
use app\models\MainModel;

abstract class Keranjang {
    public function getKeranjang()
    {
        if(isset($_SESSION['PEDAGANG_ID']))
        {
            $q = MainModel::getQuery("SELECT sum(HARGA_SATUAN*JUMLAH) as diKeranjang FROM transaksi WHERE PEDAGANG_ID = '".$_SESSION['PEDAGANG_ID']."' && STATUS_PEMBAYARAN = '0'");
            return $q;
        }
        $data[0]['diKeranjang'] = "0";
        return $data;
    }
}