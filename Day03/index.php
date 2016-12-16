<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2016/12/16 0016
 * Time: 15:10
 */

include 'conn.php';

//1.拼接字符串:

$sql = "select * from blog";

$query = mysqli_query($link,$sql);

?>

<a href="add.php">添加文章</a>
