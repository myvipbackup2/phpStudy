<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/12 0012
 * Time: 13:32
 */

include "conn.php";

if (isset($_GET['wid'])) {
    $wid = $_GET['wid'];
    $sql = "delete from blog where wid='$wid'";
    $query = mysqli_query($link, $sql);
    if ($query) {
        header('location:index.php');
    }else{
        echo "<script>alert('删除失败！')</script>";
        echo "<script>window.location.href='index.php</script>";
    }
}