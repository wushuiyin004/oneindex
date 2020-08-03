<?php
$id=isset($_GET["id"])?$_GET["id"]:38;
$info=file_get_contents("http://mapi.m2oplus.nmtv.cn/api/v1/channel.php?channel_id=".$id);
$ch = json_decode($info,true);
header('location:'.$ch[0]['m3u8']);
?>