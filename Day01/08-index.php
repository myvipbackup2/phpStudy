<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2016/12/6 0006
 * Time: 21:46
 */



$refuse = $_GET['refuse'];

if (isset($refuse)){
    echo '注册失败，跳转到首页...';
}