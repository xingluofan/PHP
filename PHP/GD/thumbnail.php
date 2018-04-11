<?php
header("Content-type:image/jpeg");
//拿到原图
$im = imagecreatefromjpeg("../images/one.jpg");
//获取原图宽高
$imW = imagesx($im);
$imH = imagesy($im);
//设置缩略图宽高
$newimW = imagesx($im)/4;
$newimH = imagesy($im)/4;
//创建画布
$im2 = imagecreatetruecolor ($newimW,$newimH);


//imagecopyresampled(目标图像连接资源，源图像连接资源，目标x点坐标，目标y点坐标，源图像x点坐标，源图像y点坐标，目标宽度，目标高度，源图像的宽度，源图像的高度)
imagecopyresampled($im2,$im,0,0,0,0,$newimW,$newimH,$imW,$imH);


imagejpeg($im2);