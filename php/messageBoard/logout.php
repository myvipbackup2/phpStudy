<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/11 0011
 * Time: 21:29
 */


if (isset($_GET['id'])) {

    setcookie('id', null);
    setcookie('name', null);
    echo "<script>window.location.href = 'index.php'</script>";

}