<?php
session_start();
//include_once '../file/file.php';
if($_POST){
    if(strtoupper ($_POST['yzm'])  !=strtoupper ($_SESSION['yzm']) ){
        die("<script>alert('验证码错误');history.back()</script>");
    }
    if($_POST['password'] !=$_POST['password_ag']){
        die("<script>alert('两次密码不一致');history.back()</script>");
    }
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['sex'] = $_POST['sex'];
    $_SESSION['hobby'] = implode('|',$_POST['hobby']);
    $_SESSION['edu'] = $_POST['edu'];
    $_SESSION['intro'] = $_POST['intro'];
//    $path= fileUP ('file','../images');
//    $_SESSION['photo'] = '../images'.$path;
    die("<script>alert('注册成功!');window.location='login.php'</script>");
}else{
    die("<script>window.location='index.php'</script>");
}