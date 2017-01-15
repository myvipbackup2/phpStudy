<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/15 0015
 * Time: 15:02
 */


if (!isset($_SESSION['id'])) {
    if (!isset($_COOKIE['id'])) {
        redirect('user/login');
    }
}

?>

<?php

foreach ($bloglist as $value){

}