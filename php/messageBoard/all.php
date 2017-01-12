<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/12 0012
 * Time: 14:18
 */

include "conn.php";


if (isset($_GET['wid'])) {

    $wid = $_GET['wid'];
    if (!$wid) {
        echo "<script>alert('参数出错！')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
    $sql = "update blog set hits=hits+1 where wid='$wid'";
    $query = mysqli_query($link, $sql);
    if ($query) {
        $sql = "select * from blog where wid='$wid'";
        $query = mysqli_query($link, $sql);
        $rs = mysqli_fetch_array($query);
    } else {
        echo "<script>alert('内部服务出错！')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }

} else {
    echo "<script>alert('参数出错！')</script>";
    echo "<script>window.location.href='index.php'</script>";
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文章详情</title>
</head>
<body>

<div style="width: 800px;margin: 20px auto; " class="container">
    <a href="index.php"
       style="text-decoration: none;display: block; background-color:cornflowerblue;color: #ffffff; width: 100px;height: 50px; line-height: 50px;text-align: center;border-radius: 10px">
        &lt; 返回主页
    </a>
    <h3 style="text-align: center;font-size: 30px">标题：<a href="#"><?php echo $rs['title'] ?></a></h3>
    <span style="color: #ff0000;">访问量：<?php echo $rs['hits'] ?></span>
    <br><br>
    内容：<p style="font-size: 20px;background-color:darkgray;"><?php echo $rs['content'] ?></p>

    <?php

    if (isset($_POST['sub'])) {

        $plcon = $_POST['plcon'];
        $wid = $_GET['wid'];
        $uid = $_COOKIE['id'];

        $sql = "insert into pl(pid,pcon,ptime,wid,uid) VALUES(NULL,'$plcon',now(),'$wid','$uid')";
        $query = mysqli_query($link, $sql);
        if ($query) {
            header("location:all.php?wid=$wid");
        } else {
            echo "<script>alert('评论出错！')</script>";
            echo "<script>window.location.href='all.php?wid=$wid'</script>";
        }

    }

    ?>

    <form action="all.php?wid=<?php echo $rs['wid'] ?>" method="post">

        <textarea style="resize:none;width: 80%;margin: 0 auto; display: block; " name="plcon" id="" cols="30"
                  rows="10"></textarea>
        <br>
        <input style="display: block;margin: 0 auto;width: 100px;height: 40px;" type="submit" name="sub" value="评论">

    </form>

    <?php

    $sql = "select * from pl ,user where user.uid= pl.uid and wid='$wid'";
    $query = mysqli_query($link, $sql);
    while ($rs = mysqli_fetch_array($query)) {
        ?>
        <div style="background-color:darkseagreen;">
            <p>评论内容：<?php echo $rs['pcon'] ?></p>
            <span>评论人：<?php echo $rs['uname'] ?></span>
            <span>评论时间：<?php echo $rs['ptime']?></span>
        </div>
        <?php
    }
    ?>
</div>

</body>
</html>
