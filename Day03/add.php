<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2016/12/16 0016
 * Time: 14:51
 */

include 'conn.php';

if (isset($_POST['sub'])) {

    $title = $_POST['title'];
    $con = $_POST['con'];

    // insert delete update select  增删改查

    //1:拼写字符串

    $sql = "insert into blog(bid,title,content,time) values(null,'$title','$con',now())";

    //2.string发送给数据库 string -> resource

    $query = mysqli_query($link, $sql);

    if ($query) {
        echo 'ok';
//        header('location:index.php');
    } else {
        echo 'error';
//        header('location:add.php');
    }

}


?>

<meta charset="UTF-8">

<form action="add.php" method="post">

    标题：<input type="text" name="title">
    <br>
    内容：<textarea name="con" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" name="sub">

</form>

