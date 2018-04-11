<?php
header("Content-type:image/jpeg");


$im = imagecreatefromjpeg("../images/one.jpg");

//水印文字颜色
$col = imagecolorallocate ($im,255,0,0);

//imagettftext($im,50(字体大小),30(角度),900(水印的位置),300,$col,"simfang.ttf",$str);
//电脑自带字体在C:/windows/font
imagettftext($im,50,0,100,300,$col,"STCAIYUN.ttf",'水印文字');

imagejpeg($im);//给一个参数表示向浏览器输出,第二个参数表示向指定路径输出,第三个参数表示图片质量1-100