<?php
/*
 * 1.随机数字
 * 2.把数字存起来
 */
session_start ();
header ( "Content-type:image/jpeg" );

$str = 'qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM0123456789';
for ( $i = 0 ; $i < 4 ; $i++ ) {
    $char[] = $str[ rand ( 0 , 62 ) ];
    $yzm .= $char[ $i ];
}
$_SESSION[ 'yzm' ] = $yzm;

//创建画板
$im = imagecreatetruecolor ( 80 , 25 );

//创建两个颜色
$white = imagecolorallocate ( $im , 255 , 255 , 255 );
$black = imagecolorallocate ( $im , 0 , 0 , 0 );

//填充颜色
imagefilledrectangle ( $im , 0 , 0 , 80 , 25 , $white );
imagerectangle ( $im , 0 , 0 , 79 , 24 , $black );

//设置干扰元素
//1.雪花点
//2.文字
//3.弧线或者直线
for ( $i = 0 ; $i < 500 ; $i++ ) {
    $color = imagecolorallocate ( $im , rand ( 160 , 200 ) , rand ( 160 , 200 ) , rand ( 160 , 200 ) );
    imagesetpixel ( $im , rand ( 1 , 78 ) , rand ( 1 , 23 ) , $color );
}

//文字
for ( $i = 0 ; $i < 4 ; $i++ ) {
    $color = imagecolorallocate ( $im , rand ( 60 , 120 ) , rand ( 60 , 120) , rand ( 60 , 120 ) );
    imagechar ( $im , rand ( 4 , 6 ) , 10 + $i * 15 , rand ( 2 , 5 ) , $char[ $i ] , $color );
}
//画线
for ( $i = 0 ; $i < rand ( 3 , 5 ) ; $i++ ) {
    $color = imagecolorallocate ( $im , rand ( 120 , 180 ) , rand ( 120 , 180 ) , rand ( 120 , 180 ) );
//    imageline( $im , rand ( 6 , 10 ) , rand ( 4 , 21 ) , rand ( 70 , 75 )  , rand ( 4 , 21 ) , $color );
    imagearc( $im , rand ( -5 , 85 ) , rand ( 4 , 21 ) , rand ( 0 , 160 )  , rand ( 0 , 90 ) ,rand ( 90 , 180 )  , rand ( 0 , 160 ) , $color );
}



//输出
imagejpeg ( $im );