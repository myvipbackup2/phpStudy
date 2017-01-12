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
    $sql = "update blog set hits=hits+1 where wid='$wid'";
    $query = mysqli_query($link,$sql);
    if ($query){
        $sql = "select * from blog where wid='$wid'";
        $query = mysqli_query($link, $sql);
        $rs = mysqli_fetch_array($query);
    }else{
        echo "";
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
    <title>文章详情</title>
</head>
<body>

<div style="width: 800px; height: 600px; margin: 20px auto; " class="container">
    <a href="index.php" style="text-decoration: none;display: block; background-color:cornflowerblue;color: #ffffff; width: 100px;height: 50px; line-height: 50px;text-align: center;border-radius: 10px">
        &lt; 返回主页
    </a>
    <h3 style="text-align: center;font-size: 30px">标题：<a href="#"><?php echo $rs['title'] ?></a></h3>
    <span style="color: #ff0000;">访问量：<?php echo $rs['hits'] ?></span>
    <br><br>
    内容：<p style="font-size: 20px;background-color:darkgray;"><?php echo $rs['content'] ?></p>
    <form action="all.php" method="post">

        <textarea style="width: 80%;margin: 0 auto; display: block; " name="plcon" id="" cols="30" rows="10"></textarea>
        <br>
        <input style="display: block;margin: 0 auto;width: 100px;height: 40px;" type="submit" name="sub" value="评论">

    </form>

</div>

</body>
</html>
