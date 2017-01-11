<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/11 0011
 * Time: 10:24
 */


include 'conn.php';

if (isset($_GET['uri'])) {
    $uri = $_GET['uri'];
} else {
    $uri = 'index.php';
}

if (isset($_POST['sub'])) {
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    $uri = $_POST['uri'];
    $sql = "select * from USER WHERE uname='$name' AND pass='$pwd'";
    $query = mysqli_query($link, $sql);
    $rs = mysqli_fetch_array($query);
    if ($rs) {
        setcookie('id', $rs['uid'], time() + 60);
        setcookie('name', $rs['uname'], time() + 60);
        echo "<script></script>";
    }

}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <style>
        .container {
            margin: 150px auto;
            width: 300px;
            height: 500px;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>登录</h2>
    <form action="login.php" method="post">

        用户名：<input type="text" name="name">
        <br>
        密&nbsp;码：<input type="password" name="pwd">
        <input type="submit" value="登录" name="sub">

    </form>

</div>

</body>
</html>
