<!doctype html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<title>Document</title>
</head>
<body>
<h1>注册</h1>
<form action = "register_chk.php" method="post">
	用户名: <input type = "text" name="username"><br>
	密码: <input type = "password" name="password"><br>
	再输入密码: <input type = "password" name="password_ag"><br>
	年龄: <input type = "text" name="age"><br>
	性别: <input type = "radio" name="sex" value="1">男<input type = "radio" name="sex" value="2">女 <br>
	爱好:
	<input type = "checkbox" name="hobby[]" value="抽烟">抽烟
	<input type = "checkbox" name="hobby[]" value="喝酒">喝酒
	<input type = "checkbox" name="hobby[]" value="烫头">烫头
	<br>
	学历:
	<select name = "edu" id = "">
		<option value = "小学">小学</option>
		<option value = "高中">高中</option>
		<option value = "大学">大学</option>
	</select>
	<br>
<!--	头像:<input type = "file">-->
	<br>
	自我介绍:
	<textarea name = "intro" id = "" cols = "30" rows = "10"></textarea>
	<br>
	验证码: <input type = "text" name="yzm" maxlength="4">
	<img src = "../GD/yzm.php" alt = "" onclick="this.src = this.src + '?num='+ Math.random()">
	<br>
	<input type = "submit" value="提交" name="sub">
	<input type = "submit" value="取消">
</form>
</body>
</html>