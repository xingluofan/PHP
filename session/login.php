<?php
session_start();
?>
<!doctype html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<title>Document</title>
</head>
<body>
<form action = "login_chk.php" method="post">
    用户名: <input type = "text" name="username"><br>
    密码: <input type = "password" name="password"><br>
    验证码: <input type = "text" name="yzm">1234<br>
    <input type = "radio" value="1" name="time">保存密码
    <input type = "radio" value="7" name="time">一周
    <input type = "radio" value="31" name="time">一个月
    <br>
    <input type = "submit" value="提交">
    <input type = "submit" value="取消">
</form>
</body>
</html>