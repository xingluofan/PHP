<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/1 0001
 * Time: 21:46
 */
session_start();
header("Content-type:image/jpeg");

$im=imagecreatetruecolor(808,600);
$yellow=imagecolorallocate($im,255,242,0);
$red=imagecolorallocate($im,255,0,0);
$blue=imagecolorallocate($im,0,0,255);


imagefill($im,0,0,$red);


imageline($im,500,150,600,150,$yellow);


imageline($im,600,150,500,200,$yellow);
imageline($im,500,200,550,100,$yellow);
imageline($im,550,100,600,200,$yellow);
imageline($im,600,200,500,150,$yellow);
//imagefill 填充颜色  必须写在线的后面
imagefill($im,503,151,$yellow);
imagefill($im,530,151,$yellow);
imagefill($im,595,151,$yellow);
imagefill($im,551,108,$yellow);
imagefill($im,595,195,$yellow);
imagefill($im,505,195,$yellow);


imageantialias($im,trur);
imagejpeg($im);