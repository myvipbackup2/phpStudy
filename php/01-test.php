<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/10 0010
 * Time: 9:44
 */

//获取当前PHP的URL地址
//echo '<pre>';
//var_dump($_SERVER);
//echo '</pre>';

//包头header跳转
//echo '这里不会输出';
//header('location:02-test.php');


$url = $_SERVER['REQUEST_URI'];

$arr = explode('/', $url);

$num = count($arr)-1;

$uri = $arr[$num];

echo $uri;

echo "<script>window.location.href='02-test.php?$uri'</script>";

