<!DOCTYPE html>
<html>
<body>

<?php
//untuk kirim gambar
//https://api.telegram.org/bot'.$token.'/sendPhoto?chat_id='.$_GET[id].'&photo=&caption=
//substr_count("Hello world. The world is nice","world");

$token = '1509662614:AAGSFOiP6AOelL2cvJvF7j2ThkOByzGFy2Q';
$t = ''.$_GET[pesan].'';
//periksa
$periksascreenshot = substr_count(''.$t.'','screenshot');


if ($t =='pasang' or $t =='paseung' or $t =='paseueng') {
  echo 'pasang';
        $url ='https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$_GET[id].'&text=Digrak ek paseueng poh : , puncak paseueng poh '.$tinggi.', mulayi jitron poh '.$mulaiturun.', tho abeh poh '.$rendah.'';


} 

elseif ($t == 'gempa' or $t == 'geumpa' OR $t == '/geumpa' OR $t == '/gempa') {
  echo 'gempa';
  include 'gempa.php';
  
        //$url ='https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$_GET[id].'&text=perintah : gempa '.$gamba.'';
        
        $url = 'https://api.telegram.org/bot'.$token.'/sendPhoto?chat_id='.$_GET[id].'&photo='.$gambar.'&caption=Geumpa keuneulheueh: poh '.$jam.' ('.$tanggal.')%0D%0A %0D%0ATeuga : '.$kekuatan.' SR%0D%0A %0D%0Apusat geumpa di '.$wilayah.'%0D%0A %0D%0AKordinat : '.$kordinat.' %0D%0A %0D%0A Lhok : '.$kedalaman.' %0D%0A %0D%0A Meunyum trok : '.$dirasakan.'';
} 


elseif ($periksascreenshot>0) {
    
    include 'screenshot/screenshot.php';
    echo 'screenshot : '.$screenshot.''; 
    $url = 'https://api.telegram.org/bot'.$token.'/sendPhoto?chat_id='.$_GET[id].'&photo='.$screenshot.'&caption=';
} 


elseif ($t == 'hijriah' or $t == 'hijriyah' or $t == 'hijr') {
  echo 'hijriah';
  include 'hijriah/hijriah.php';
        $url ='https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$_GET[id].'&text='.$tanggal.' uroe buleuen, buleuen '.$bulan.', thon '.$tahun.'';
} 




else {
  echo 'else';
  
        $url ='https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$_GET[id].'&text=perintah : else (tdk ditemukan)';
}

$ch = curl_init(''.$url.'');
    
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
curl_close($ch);
echo $content;




$ambil = file_get_contents('log/'.$_GET[id].'.txt');
unlink('log/'.$_GET[id].'.txt');
$myfile = fopen('log/'.$_GET[id].'.txt', 'w') or die('Unable to open file!');
$txt = ''.$ambil.'';

fwrite($myfile, $txt);


$txt = '

';
fwrite($myfile, $txt);


$txt = '|'.$_GET[id].' => '.$t.'';

fwrite($myfile, $txt);


fclose($myfile);






?>
 
</body>
</html>























