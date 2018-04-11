<?php
session_start();

if($_POST){
    if($_POST['yzm'] != '1234'){
        die("<script>alert('验证码错误');history.back()</script>");
    }
    if($_POST['username'] !=$_SESSION['username']){
        die("<script>alert('用户名错误');history.back()</script>");
    }
    if($_POST['password'] !=$_SESSION['password']){
        die("<script>alert('密码错误');history.back()</script>");
    }

    die("<script>alert('登录成功!');window.location='index.php'</script>");
}else{
    die("<script>window.location='index.php'</script>");
}