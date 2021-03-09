<?php

  $ch = curl_init("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
curl_close($ch);
//echo $content;

//TANGGAL
$awal = explode('<Tanggal>', $content);
$akhir = explode('</Tanggal>', $awal[1]);
$tanggal = ''.$akhir[0].'';
echo $tanggal;



//jAM
$awal = explode('<Jam>', $content);
$akhir = explode('</Jam>', $awal[1]);
$jam = ''.$akhir[0].'';
//echo $jam;


//kordinat
$awal = explode('<coordinates>', $content);
$akhir = explode('</coordinates>', $awal[1]);
$kordinat = ''.$akhir[0].'';
echo $kordinat;



//lintang
$awal = explode('<Lintang>', $content);
$akhir = explode('</Lintang>', $awal[1]);
$lintang = ''.$akhir[0].'';
echo $lintang;

//Bujur
$awal = explode('<Bujur>', $content);
$akhir = explode('</Bujur>', $awal[1]);
$bujur = ''.$akhir[0].'';
echo $bujur;


//kekuatan
$awal = explode('<Magnitude>', $content);
$akhir = explode('</Magnitude>', $awal[1]);
$kekuatan = ''.$akhir[0].'';
echo $kekuatan;

//kedalaman
$awal = explode('<Kedalaman>', $content);
$akhir = explode('</Kedalaman>', $awal[1]);
$kedalaman = ''.$akhir[0].'';
echo $kedalaman;

//<Wilayah>
$awal = explode('<Wilayah>', $content);
$akhir = explode('</Wilayah>', $awal[1]);
$wilayah = ''.$akhir[0].'';
echo $wilayah;


//<Potensi>
$awal = explode('<Potensi>', $content);
$akhir = explode('</Potensi>', $awal[1]);
$potensi = ''.$akhir[0].'';
echo $potensi;


//<Dirasakan>
$awal = explode('<Dirasakan>', $content);
$akhir = explode('</Dirasakan>', $awal[1]);
$dirasakan = ''.$akhir[0].'';
echo $dirasakan;



//<Shakemap>
$awal = explode('<Shakemap>', $content);
$akhir = explode('</Shakemap>', $awal[1]);
$gamba = 'https://data.bmkg.go.id/DataMKG/TEWS/'.$akhir[0].'';
$gambar = 'https://data.bmkg.go.id/DataMKG/TEWS/'.$akhir[0].'';
echo $gambar;



?>
