<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/28 0028
 * Time: 17:35
 */
session_start();
session_destroy();
die("<script>window.location='index.php'</script>");