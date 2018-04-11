<?php
function fileUP ( $filename , $filepath , $filesize = 512000 ){

    $name = $_FILES[ $filename ][ 'name' ];
    $size = $_FILES[ $filename ][ 'size' ];
    $type = $_FILES[ $filename ][ 'type' ];
    $temp_name = $_FILES[ $filename ][ 'tmp_name' ];
    $error = $_FILES[ $filename ][ 'error' ];

    if ( $error ) {

        die( "<script>alert('error');history.back()</script>" );

    }

    if ( $size > $filesize ) {

        die( "<script>alert('large');history.back()</script>" );

    }

    if ( $type != 'image/jpeg' && $type != 'image/png' && $type != 'image/gif' ) {

        die( "<script>alert('type error');history.back()</script>" );

    }

    if ( file_exists ( $filepath . '/' . $name ) ) {

        die( "<script>alert('existed');history.back()</script>" );

    }

    //move_uploaded_file("要移动文件的位置","新位置");
    //将文件从临时的位置移动到指定路径
    move_uploaded_file ( $temp_name , $filepath . '/' . $name );

    //将文件名变成数组
    $tempArr = explode ( '.' , $name );

    //设置新名字
    $newname = date ( 'Ymdhis' ) . rand () . '.' . end ( $tempArr );

    //文件路径
    $path = $filepath . '/' . $newname;

    //给文件重命名
    rename ( $filepath . '/' . $name , $path );

    return $path;
}