<?php

  $ch = curl_init("https://timesprayer.com/en/hijri-date-in-indonesia.html");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
curl_close($ch);



$first_step = explode('Today Hijri date</td><td>', $content);
$second_step = explode('</td></tr>', $first_step[1]);
$grab = '-'.$second_step[0].'';

$grab = str_replace(' ','-',$grab);



//ambil tanggal

$awal = explode('-', $grab);
$akhir = explode('-', $awal[1]);
$tanggal = $akhir[0];
$bulan = $akhir[1];
$tahun =$akhir[2];




?>
