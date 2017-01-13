<style>
    table{
        border:1px solid #050;
    }
    .fontb{
        color:white;
        background:blue;
    }
    th{
        width:30px;
    }
    th,td{
        height:30px;
        text-align:center;
    }
</style>

<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/13 0013
 * Time: 13:16
 */

include "calendarClass.php";

$calendar = new calendarClass();
$calendar->out();


?>
