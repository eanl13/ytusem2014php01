<?php
/**
 * Created by PhpStorm.
 * User: ea
 * Date: 31.01.2014
 * Time: 15:34
 */

/*$yıldız = array(
    'Sun.png',
    'Sirius.png',
    'Vega.png',
    'Altair.png',
    'Pollux.png',
    'Arcturus.png',
    'Aldebaran.png'
);


if ($rastgeleyıldız = array_rand($yıldız,2)){
    echo $yıldız[$rastgeleyıldız[0]];
}*/

$sırasız_dizi = array('Sun.png','Sirius.png','Vega.png','Altair.png','Pollux.png','Arcturus.png','Aldebaran.png');

function hızlı_sıralama($dizi)
{
    if(count($dizi) == 0)
        return array();

    $pivot = $dizi[0];
    $left = $right = array();

    for($i = 1; $i < count($dizi); $i++) {
        if($dizi[$i] < $pivot)
            $left[] = $dizi[$i];
        else
            $right[] = $dizi[$i];
    }

    return array_merge(hızlı_sıralama($left), array($pivot), hızlı_sıralama($right));
}

$sıralı = hızlı_sıralama($sırasız_dizi);

$rastgeleyıldız = array_rand($sıralı,2);
echo $sıralı[$rastgeleyıldız[0]];


