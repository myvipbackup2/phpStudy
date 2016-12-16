<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2016/12/16 0016
 * Time: 14:36
 */


//数据库连接

//1.打开数据库连接  @可以过滤数据库密码错误不会暴露路径
$link = @mysqli_connect('localhost', 'root', 'root') or die('数据库连接失败');


//2.选择数据库
mysqli_select_db($link,'blog');


//3.定义传输编码
mysqli_set_charset($link,'utf8');//设置传输编码,不是utf-8


