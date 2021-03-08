<?php
$_GET[kata]=strtolower(''.$_GET[kata].'');
$_GET[kata]=str_replace('jawoe-','',$_GET[kata]);

$_GET[kata]=str_replace('Jawoe-','',$_GET[kata]);

//jika huruf awal maka buka file satu huruf aja
$input = $_GET[kata];
$ambil=file_get_contents('db/'.$input[0].'.txt');

//echo 'terbuka file db/'.$input[0].'.txt';
$pecah = explode("|",$ambil);
 
for($x=0;$x<9000;$x++){
    $pecahbaris = explode(",",$pecah[$x]);
    
    //echo ''.$pecah[$x].'<br/>';
    
    if($_GET[kata]==''.$pecahbaris[0].''){
        
        echo ''.$_GET[kata].' = '.$pecahbaris[4].'';
        
        
        
        
//$url = 'https://api.telegram.org/bot854606073:AAEaXJzacm1oshwSmu0CQDhwr9Iw9QU5vGg/sendMessage?chat_id=-1001078076181&text='.$_GET[kata].'  = '.$pecahbaris[4].'';


        
         
        
        
        
    }
    else {
        //tidak bisa di echo dalam loop karena akan muncul banyak
    }
       


}
 $ch = curl_init(''.$url.'');
  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
curl_close($ch);
    
    
$hitung = substr_count($ambil,''.$_GET[kata].'');
if($hitung>0){ 
    
        $nahana = ' ';
    }
    else {
        $nahana = 'Narit "'.$_GET[kata].'" hana lom na lam database.';
        
    }
    echo $nahana;
    
    //echo ''.$pecahbaris[0].''; 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
