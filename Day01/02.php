<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2016/12/2 0002
 * Time: 13:39
 */
//var_dump($_GET['year']);

    if (isset($_GET['sub'])){
        $year = $_GET['year'];
        echo $year;
    }

?>

<meta charset="utf-8">
<form action="02输入框.php">
    year: <input type="text" name="year" value="1999">
    <input type="submit" name="sub" value="提交">
</form>
