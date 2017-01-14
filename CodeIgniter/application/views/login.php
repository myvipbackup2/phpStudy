<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/14 0014
 * Time: 11:02
 */


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="assets/js/jquery.min.js"></script>
</head>
<body>

<div class="container">
    <h2>登录</h2>
    <form action="login.php" method="post">

        用户名：<input type="text" name="name">
        <br>
        密&nbsp;码：<input type="password" name="pwd">
        <br>
        <input type="checkbox" name="2week">2小时内免密码登录
        <br>
        <input type="submit" value="登录" name="sub">

        <input type="hidden" name="uri" value="<?php echo $uri ?>">
    </form>

</div>


<script>
    $(function () {

    });
</script>
</body>
</html>