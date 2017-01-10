<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/10 0010
 * Time: 13:59
 */

include "conn.php";


?>

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

        #article{
            width: 70%;
            float: left;
            /*height: 300px;*/
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
        
        .catalog{
            margin: 10px;
            display: inline-block;
            /*text-align: center;*/
            padding: 2px;
            /*width: 60px;*/
            border-radius: 2px;
            background: cornflowerblue;
            color: #fff;
        }


    </style>

</head>
<body>

<h2>主页</h2>

<div class="search">
    <a href="#">XX已经登录</a>
    <div class="searh-text">
        <form action="">
            <input type="text" name="search">
            <input type="submit" name="sub" value="搜索">
        </form>
    </div>
</div>

<div id="article">
    <?php

    include "conn.php";

    $sql = "select * from blog";

    $query = mysqli_query($link, $sql);

    while ($arr = mysqli_fetch_array($query)) {


        ?>

        <div class="article">

            <div class="title">标题:<a href="#"><span><?php echo $arr['title'] ?></span></a></div>
            <br>
            时间:<span><?php echo $arr['time'] ?></span>
            <br/>
            作者:<span><?php echo $arr['uid'] ?></span>
            <br/>
            内容:<p><?php echo iconv_substr($arr['content'], 0, 8) ?>...</p>
            <hr>

        </div>


        <?php

    }
    ?>

</div>

<div id="catalog">

    <?php

    include "conn.php";

    $sql = "select * from CATALOG ";

    $query = mysqli_query($link,$sql);

    while ($cat=mysqli_fetch_array($query)){
        $cid = $cat['cid'];
    ?>

        <a href="<?php echo "index.php?'$cid'" ?>" class="catalog">
            <?php
                echo $cid.'.';
                echo $cat['cname'];
            ?>
        </a>

    <?php
    }
    ?>

</div>

</body>
</html>
