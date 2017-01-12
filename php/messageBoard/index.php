<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>主页</title>
    <style>

        h2 {
            text-align: center;
            background-color: burlywood;
        }

        #article {
            width: 60%;
            float: left;
            background-color: whitesmoke;
        }

        #catalog {
            background-color: wheat;
            width: 20%;
            float: right;
        }

        .article {
            margin: 20px;
        }

        .search {
            margin-bottom: 20px;
            text-align: center;
            padding: 20px;
            background-color: whitesmoke;
        }

        .searh-text {
            display: inline-block;
        }

        .title {
            display: block;
            background-color: cornflowerblue;
        }

        .catalog {
            margin: 10px;
            display: inline-block;
            /*text-align: center;*/
            padding: 2px;
            /*width: 60px;*/
            border-radius: 2px;
            background: cornflowerblue;
            color: #fff;
            text-decoration: none;
        }


    </style>

</head>
<body>

<h2>主页</h2>

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

    include "conn.php";

    if (isset($_GET['sub'])) {
        $search = $_GET['search'];
        if ($search) {
            $w = "title like '%$search%'";
        } else {
            $w = 1;
        }
    } else {
        $w = 1;
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "select * from blog,catalog,user where $w AND user.uid=blog.uid and catalog.cid=blog.cid and catalog.cid='$id' order by blog.time desc";
    } else {
        $sql = "select * from blog,user where $w AND user.uid=blog.uid order by blog.time desc";

    }

    $query = mysqli_query($link, $sql);

    while ($arr = mysqli_fetch_array($query)) {

        ?>

        <div class="article">

            <div class="title">
                标题:<a href="#"><span><?php echo $arr['title'] ?></span></a>
                <a style="margin-left: 30px" href="edit.php?wid=<?php echo $arr['wid'] ?>">修改</a>|<a href="del.php?wid=<?php echo $arr['wid']?>">删除</a>
            </div>
            <ul>
                <li>时间:<span><?php echo $arr['time'] ?></span></li>
                <li>作者:<span><?php echo $arr['uname'] ?></span></li>
            </ul>
            内容:
            <p style="background-color:#fff;">
                <?php
                echo $arr['content'];
                ?>
            </p>
            <hr>

        </div>

        <?php

    }
    ?>

</div>

<div id="catalog">
    <h3 style="padding: 0 10px">文章分类</h3>
    <a href="index.php" class="catalog">全部分类</a><br>
    <?php

    include "conn.php";

    $sql = "select * from CATALOG ";

    $query = mysqli_query($link, $sql);

    while ($cat = mysqli_fetch_array($query)) {
        $cid = $cat['cid'];
        ?>

        <a href="index.php?id=<?php echo $cid ?>" class="catalog">
            <?php
            echo $cat['cname'];
            ?>
        </a>
        <br>

        <?php
    }
    ?>

</div>

</body>
</html>
