<?php

  $ch = curl_init("https://tides4fishing.com/as/west-indonesia/meulaboh");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
curl_close($ch);



$first_step = explode('the sun rose in ', $content);
$second_step = explode('</div>', $first_step[1]);
$grab = $second_step[0];



//ambil jam matahari terbit

$awal = explode("at <span class='naranja'>", $grab);
$akhir = explode('<span', $awal[1]);
$terbit = $akhir[0];
echo 'matahari terbirt = '.$terbit.'<br/>';

//matahari tenggelam
$awal = explode("and sunset was  at <span class='naranja'>", $grab);
$akhir = explode('<span', $awal[1]);
$tenggelam = $akhir[0];
echo 'tenggelam : '.$tenggelam.'<br/>';


//pasang rendah

$awal = explode("low tide</span> was  at <span class='rojo'>", $grab);
$akhir = explode('<span', $awal[1]);
$rendah = $akhir[0];
echo 'pasang rendah : '.$rendah.'<br/>';

//pasang tinggi

$awal = explode("high tide</span>  at <span class='azul'>", $grab);
$akhir = explode('<span', $awal[1]);
$tinggi = $akhir[0];
echo 'pasang tinggi : '.$tinggi.'<br/>';


//jinow

$awal = explode('<div class="brujula_mareas_texto_pc grafico_estado_actual_texto2">', $content);
$akhir = explode('</div>', $awal[1]);

$jinoe = $akhir[0];
$jinoe = str_replace('','',$jinoe);
$jinoe = str_replace('','',$jinoe);
$jinoe = str_replace('','',$jinoe);
$jinoe = str_replace('','',$jinoe);
$jinoe = str_replace('','',$jinoe);
$jinoe = str_replace('','',$jinoe);
echo 'jinoe : '.$jinoe.'<br/>';



?>
