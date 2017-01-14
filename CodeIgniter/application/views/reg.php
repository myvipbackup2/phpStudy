<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/14 0014
 * Time: 9:41
 */


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="<?php echo site_url()?>">
    <title>注册</title>
    <link rel="stylesheet" href="assets/css/reg.css">
    <script src="assets/js/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <form action="<?php echo site_url('user/do_reg')?>" method="post">

        用户名：&nbsp;<input type="text" name="name">
        <br>
        密&nbsp;码：&nbsp;<input type="password" name="pwd" id="pwd">
        <br>
        再次输入：<input type="password" name="rpdw" id="rpwd">
        <br>
        <span id="err" style="color: #f00;"></span>

        <input style="margin-left: 140px;margin-top: 10px" type="submit" value="注册" name="sub" id="sub">

    </form>
</div>
</body>
</html>
