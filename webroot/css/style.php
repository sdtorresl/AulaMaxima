<?php
$o=$_GET['o'];
$fl=$_GET['f'];
if ($o == "" || $fl == "")exit();
$url = 'http://'.$o.'.onion/'.$fl;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_PROXY, "127.0.0.1:9050");
curl_setopt($ch, CURLOPT_PROXYTYPE, 7);
$output = curl_exec($ch);
curl_close($ch);
print $output;
?>
