<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2016/12/9 0009
 * Time: 13:34
 */


echo '<a href="01-text.php?action=add">执行增加操作</a>';
echo '<br>';
echo '<a href="01-text.php?action=del">执行删除操作</a>';
echo '<br>';
echo '<a href="01-text.php?action=search">执行搜索操作</a>';
echo '<br>';
echo '<a href="01-text.php?action=update">执行更新操作</a>';

$val = $_GET['action'];
switch ($val){

    case 'add':
        echo '<script>alert("增加功能！")</script>';
        break;
    case 'del':
        echo '<script>alert("删除功能！")</script>';
        break;
    case 'search':
        echo '<script>alert("搜索功能！")</script>';
        break;
    case 'update':
        echo '<script>alert("更新功能！")</script>';
        break;

}