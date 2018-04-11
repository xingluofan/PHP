<!doctype html>
<html lang = "en">
<head>
<title>Document</title>
</head>
<body>
<?php
if($_SESSION['username']) {
?>
    <ul>
	<li><a href = "">会员商品</a></li>
	<li><a href = "">会员特价</a></li>
	</ul>
<?php
}
?>
</body>
</html>