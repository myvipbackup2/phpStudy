<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/15 0015
 * Time: 15:02
 */

if (!isset($_SESSION['id'])) {
    if (!isset($_COOKIE['id'])) {
        redirect('user/login');
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
    <base href="<?php echo site_url() ?>">
    <title>主页</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>

<div class="search">

    <div class="state">
        <?php
        if (isset($_COOKIE['id'])) {
            $id = $_COOKIE['id'];
            $name = $_COOKIE['name'];
            echo "<a style='float: left;margin-right: 20px' href='center.php'>" . $name . "已经登录</a>";
            echo "<a style='float: left;' href='logout.php?id=$id'>注销</a>";
        } else {
            echo "<a style='float: left;margin-right: 20px' href='login.php'>登录</a>";
        }
        ?>
    </div>

    <div class="searh-text">

        <form action="index.php">
            <input type="text" name="search">
            <input type="submit" name="sub" value="搜索">
        </form>
    </div>

    <a style="float: right;" href="add.php">添加文章</a>
</div>


<div id="article">
    <?php

    foreach ($bloglist as $value) {
        ?>

        <div class="article">

            <div class="title">
                标题:<span><?php echo $value->title ?></span>
            </div>
            <ul>
                <li>时间:<span><?php echo $value->time ?></span></li>
                <li>作者:<span><?php echo $value->uid ?></span></li>
                <li>访问量：<span><?php echo $value->hits ?></li>
            </ul>
            内容:
            <p style="background-color:#fff;">
                <?php
                echo $value->content;
                ?>
            </p>
            <hr>

        </div>

        <?php

    }
    ?>

</div>

</body>
</html>