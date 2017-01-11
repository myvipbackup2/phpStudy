<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/11 0011
 * Time: 10:24
 */


include 'conn.php';

if (isset($_POST['sub'])) {

    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    $arr = array('$', '*', '#', ',', '%');
    $flag = true;
    for ($i = 0; $i < strlen($name); $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($arr[$j] == $name[$i]) {
                $flag = false;
            }
        }
    }
    if (!$flag) {
        echo "<script>alert('用户名非法！')</script>";
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
    <title>注册</title>
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
    <h2>注册</h2>
    <form action="reg.php" method="post">

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

<script>

    var oPwd = document.getElementById('pwd');
    var oRpwd = document.getElementById('rpwd');
    var oSub = document.getElementById('sub');
    var oSpan = document.getElementById('err');


    oRpwd.onblur = function () {
        if (oPwd.value != oRpwd.value) {
            oSpan.innerHTML = '两次密码不一致！';
            oSub.disabled = 'disabled';
        } else {
            oSpan.innerHTML = '';
            oSub.disabled = false;
        }
    }

</script>

</body>
</html>
