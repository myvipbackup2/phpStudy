<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2016/12/2 0002
 * Time: 15:13
 */

//闰年

if (isset($_GET['sub'])) {
    $year = $_GET['year'];
    if (is_numeric($year)) {
        if ($year % 400 == 0 || ($year % 4 == 0 && $year % 400 == 0)) {
            echo $year . '是闰年';
        } else {
            echo $year . '不是闰年';

        }
    } else {
        echo '输入非法';
    }
}

?>

<meta charset="utf-8">
<form action="04判断是否闰年.php" method="get">
    year: <input type="text" name="year">
    <input type="submit" name="sub" value="提交">
</form>

