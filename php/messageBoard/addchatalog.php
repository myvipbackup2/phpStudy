<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/10 0010
 * Time: 11:39
 */

include "conn.php";

if (isset($_POST['sub'])) {

    $cname = $_POST['cname'];

    $sql = "select * from CATALOG where cname = '$cname'";

    $query = mysqli_query($link, $sql);

    $result = mysqli_fetch_array($query);

    if ($result) {

        echo "<script>alert('当前分类已经存在！')</script>";

        echo "<script>window.location.href = 'addchatalog.php';</script>";

    } else {
        $sql = "insert into CATALOG(cid,cname) VALUES(NULL,'$cname')";
        $query = mysqli_query($link, $sql);
        if ($query) {
            echo "<script>window.location.href = 'add.php';</script>";
        }
    }

}


?>

<meta charset="UTF-8">

<form action="addchatalog.php" method="post">

    分类名：<input type="text" name="cname">
    <input type="submit" name="sub" value="增加分类">

</form>