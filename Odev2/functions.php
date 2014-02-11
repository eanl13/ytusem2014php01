<?php
/**
 * Created by PhpStorm.
 * User: ea
 * Date: 11.02.2014
 * Time: 10:01
 */
header('Content-Type:text/html;charset=utf-8');

function stok_kontrol($ad, $adet){
    if(is_int($ad) && is_int($adet)){
        echo "ım the king";
        meyve_var($ad, $adet);
    }else{
        echo "hata oluştu";
        return false;
    }
};


function __construct($meyve_ad, $fiyat, $adet){
    $this->meyve_ad = $meyve_ad;
    $this->fiyat    = $fiyat;
    $this->adet     = $adet;
};


$meyveler=array(
    1  =>array('meyve_ad'=>'armut',      'fiyat'=>'0,75', 'adet'=>'23'),
    2  =>array('meyve_ad'=>'muz',        'fiyat'=>'2,25', 'adet'=>'13'),
    3  =>array('meyve_ad'=>'mandalina',  'fiyat'=>'1,50', 'adet'=>'18'),
    4  =>array('meyve_ad'=>'greyfurt',   'fiyat'=>'2,00', 'adet'=>'30'),
    5  =>array('meyve_ad'=>'yenidunya',  'fiyat'=>'3,50', 'adet'=>'12'),
    6  =>array('meyve_ad'=>'kavun',      'fiyat'=>'4,50', 'adet'=>'20'),
    7  =>array('meyve_ad'=>'karpuz',     'fiyat'=>'3,50', 'adet'=>'17'),
    8  =>array('meyve_ad'=>'erik',       'fiyat'=>'2,50', 'adet'=>'22'),
    9  =>array('meyve_ad'=>'dut',        'fiyat'=>'1,00', 'adet'=>'40'),
    10 =>array('meyve_ad'=>'uzum',       'fiyat'=>'5,50', 'adet'=>'34')
);


$rastgeleAd=rand(1,20);
$rastgeleAdet=rand(1,100);


function meyve_var($meyveler, $değer1){
    if($meyveler == $değer1){

    }

};



stok_kontrol($rastgeleAd,$rastgeleAdet);


