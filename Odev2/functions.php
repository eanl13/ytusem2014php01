<?php
/**
 * Created by PhpStorm.
 * User: ea
 * Date: 11.02.2014
 * Time: 10:01
 */
header('Content-Type:text/html;charset=utf-8');


$rastgeleAd=rand(1,20);
$rastgeleAdet=rand(1,100);


function stok_kontrol($_parametreRastgeleAd, $parametreRastgeleAdet){

    global $meyveler;
    global $rastgeleAd;
    if(is_int($_parametreRastgeleAd) && is_int($parametreRastgeleAdet)){
        meyve_var($meyveler,$rastgeleAd);
    }else{
        echo "hata oluştu";
        return false;
    }
};


$meyveler=array(
    1  =>array('meyve_ad'=>'armut',      'fiyat'=>'5',    'adet'=>'53'),
    2  =>array('meyve_ad'=>'muz',        'fiyat'=>'2,25', 'adet'=>'40'),
    3  =>array('meyve_ad'=>'mandalina',  'fiyat'=>'1,50', 'adet'=>'18'),
    4  =>array('meyve_ad'=>'greyfurt',   'fiyat'=>'2,00', 'adet'=>'92'),
    5  =>array('meyve_ad'=>'yenidunya',  'fiyat'=>'3,50', 'adet'=>'25'),
    6  =>array('meyve_ad'=>'kavun',      'fiyat'=>'4,50', 'adet'=>'65'),
    7  =>array('meyve_ad'=>'karpuz',     'fiyat'=>'3,50', 'adet'=>'78'),
    8  =>array('meyve_ad'=>'erik',       'fiyat'=>'2,50', 'adet'=>'86'),
    9  =>array('meyve_ad'=>'dut',        'fiyat'=>'1,00', 'adet'=>'40'),
    10 =>array('meyve_ad'=>'uzum',       'fiyat'=>'5,50', 'adet'=>'34')
);


stok_kontrol($rastgeleAd,$rastgeleAdet);

function meyve_var($meyve, $parametreRastgeleAd){
    global $rastgeleAdet, $meyveler;

    if(array_key_exists($parametreRastgeleAd, $meyve)){

        if($rastgeleAdet>=$meyveler['adet']){

            $sonFiyat=$meyveler[$parametreRastgeleAd]['adet']*$meyveler[$parametreRastgeleAd]['fiyat'];
            echo "meyve adı: {$meyveler[$parametreRastgeleAd]['meyve_ad']} <br>meyve adedi:{$meyveler[$parametreRastgeleAd]['adet']} <br>fiyatı:$sonFiyat";

        }else{

            echo "stokta yeteri kadar meyve yok";
        }
    }else{
        echo "meyve stokta bulunmuyor.";
    }
    
};


