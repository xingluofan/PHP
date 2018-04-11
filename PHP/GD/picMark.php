<?php
header("Content-type:image/jpeg");

$im = imagecreatefromjpeg("../images/one.jpg");
$im2 = imagecreatefrompng("../images/src.png");

$imW = imagesx($im);
$imH = imagesy($im);

$im2W = imagesx($im2);
$im2H = imagesy($im2);

//echo $im2W;

//imagecopyresampled(目标图像连接资源，源图像连接资源，目标x点坐标，目标y点坐标，源图像x点坐标，源图像y点坐标，目标宽度，目标高度，源图像的宽度，源图像的高度)
imagecopyresampled($im,$im2,$imW-$im2W,$imH-$im2H,0,0,$im2W,$im2H,$im2W,$im2H);

//imagecopymerge(目标图像连接资源，源图像连接资源, 目标x点坐标，目标y点坐标，源图像x点坐标，源图像y点坐标，源图像的宽度，源图像的高度, pct);
imagecopymerge($im,$im2,$imW-$im2W*2,$imH-$im2H*2,0,0,$im2W,$im2H,30);


imagejpeg($im);