<?php
$id=$_GET["id"];
$url="http://www.miguvideo.com/gateway/playurl/v1/play/playurl?contId=$id&rateType=4";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,9);
$data=curl_exec($ch);
curl_close($ch);
preg_match('/"url":"(.*?)"/i',$data,$sn);
header('location:'.$sn[1]);