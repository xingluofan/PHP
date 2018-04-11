<?php
session_start ();
?>
<!doctype html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<title>Document</title>
</head>
<style>
	ul {
		padding: 0;
		margin: 0;

	}

	li {
		padding: 0;
		margin: 0 5px;
		float: left;
		list-style: none;
	}
</style>
<body>
<?php
if ( $_SESSION[ 'username' ] ) {
    ?>
	欢迎会员<?= $_SESSION[ 'username' ] ?> <a href = "quit.php">注销</a>
	<ul>
	<li><a href = "vip.php">vip专区</a></li>
	<li><a href = "index.php?id=1">会员信息</a></li>
	<li><a href = "index.php?id=2">观影专区</a></li>
	<li><a href = "index.php?id=3">特价商品</a></li>
	<li><a href = "index.php?id=4">新闻中心</a></li>
	</ul>
    <?php
} else {
    ?>
	欢迎:游客<?= rand ( 1000 , 9999 ) ?>
	<a href = "login.php">登录</a>
	<a href = "register.php">注册</a>
	<ul>
		<li><a href = "index.php?id=2">观影专区</a></li>
		<li><a href = "index.php?id=3">特价商品</a></li>
		<li><a href = "index.php?id=4">新闻中心</a></li>
	</ul>
    <?php
}
?>


<?php
if ( $_GET[ 'id' ] == 1 ) {
    ?>
	<br>
会员信息: <br>
	会员名:<?= $_SESSION[ 'username' ] ?><br>
	年龄:<?= $_SESSION[ 'age' ] ?><br>
	性别:<?= $_SESSION[ 'sex' ] ?><br>
	爱好:<?= $_SESSION[ 'hobby' ] ?><br>
	学历:<?= $_SESSION[ 'edu' ] ?><br>
    <?php
}
?>

</body>
</html>