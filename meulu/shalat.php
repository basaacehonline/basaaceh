<?php

  $ch = curl_init("https://www.muslimpro.com/Prayer-times-Meulaboh-Indonesia-1214488");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
curl_close($ch);


//subuh
$awal = explode('>Fajr</span><span class="jam-solat">', $content);
$akhir = explode('</span>', $awal[1]);
$suboh = ''.$akhir[0].'';
echo $suboh;
//zuhur
$awal = explode('>Dhuhr</span><span class="jam-solat">', $content);
$akhir = explode('</span>', $awal[1]);
$leuho = ''.$akhir[0].'';

echo $leuho;

//asar
$awal = explode('>Asr</span><span class="jam-solat">', $content);
$akhir = explode('</span>', $awal[1]);
$asa = ''.$akhir[0].'';


//magrib
$awal = explode('>Maghrib</span><span class="jam-solat">', $content);
$akhir = explode('</span>', $awal[1]);
$mugreb = ''.$akhir[0].'';

//insya
$awal = explode('a</span><span class="jam-solat">', $content);
$akhir = explode('</span>', $awal[1]);
$insya = ''.$akhir[0].'';
echo $insya;


?>
