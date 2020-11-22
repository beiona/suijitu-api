<?php
$img=file('image_url.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>