<?

$ch = curl_init('https://api.telegram.org/bot854606073:AAEaXJzacm1oshwSmu0CQDhwr9Iw9QU5vGg/sendMessage?chat_id=-1001078076181&text=Matauroe lop : '.$tenggelam.' WIB');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
$content = curl_exec($ch);
curl_close($ch);
echo $content;

?>
