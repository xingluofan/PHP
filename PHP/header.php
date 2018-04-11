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
<form action = "echo.php" method="post">
    <input type = "text" name="name">
    <input type = "submit">
</form>
<?php
if($_SESSION['name']) {
?>
    欢迎游客<?=rand(1000,9999)?>
<?php
}
?>
<!--header("Content-Type:text/html;Charset=utf-8");//请求头,设置在页面最顶部,用于向浏览器发送请求头-->
</body>
</html>


