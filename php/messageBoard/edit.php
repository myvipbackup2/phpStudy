<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/12 0012
 * Time: 11:31
 */

include "conn.php";

if (isset($_GET['wid'])) {

    $wid = $_GET['wid'];
    $sql = "select * from blog where wid='$wid' ";
    $query = mysqli_query($link, $sql);
    $rs = mysqli_fetch_array($query);

}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改文章</title>
    <style>
        .container {
            margin: 150px auto;
            width: 400px;
            height: 500px;
        }
    </style>
</head>
<body>

<div class="container">
    <form action="edit.php">
        <input type="hidden" name="hide" value="<?php echo $rs['title']; ?>">
        标题：<input type="text" value="<?php echo $rs['title'] ?>">
        <br>
        <textarea name="content" id="" cols="30" rows="10">
            <?php
            echo $rs['content'];
            ?>
        </textarea>
        <br>
        <input style="margin-left: 60px" type="submit" value="更新文章">
    </form>
</div>

</body>
</html>
