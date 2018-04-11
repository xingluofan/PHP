<?php
include_once "./file.php";
if($_POST){
    $path =fileUP('file','../images/');
    echo "<img src='".$path."' width='200'>";
}
?>


<!doctype html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<title>Document</title>
</head>
<body>
<form action = "form.php" method="post" enctype="multipart/form-data">
    <input type = "file" name="file">
    <input type = "submit" name="sub">
</form>
</body>
</html>