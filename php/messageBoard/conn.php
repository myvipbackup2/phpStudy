<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/10 0010
 * Time: 11:26
 */

//数据库引擎（mysql，mysqli，pdo）

//1.打开数据库连接

$link = @mysqli_connect('127.0.0.1:3306', 'root', 'root') or die('打开数据库连接失败！');


//2.选择数据库

@mysqli_select_db($link, 'blog6') or die('选择数据库失败！');

//3.设置传输编码

mysqli_set_charset($link, 'utf8');

