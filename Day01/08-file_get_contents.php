<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2016/12/6 0006
 * Time: 21:35
 */

$text = file_get_contents('test.txt');
echo '<pre>';
echo $text;
echo '</pre>';

$agree = $_GET['agree'];

if (isset($agree)){
    echo '继续下一步';
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>file_get_contents</title>
</head>
<body>
<form action="08-next.php" style="text-align: center;" method="get">
    <input type="submit" value="同意注册" name="agree">
</form>
<form action="08-index.php" style="text-align: center;" method="get">
    <input type="submit" value="我不同意" name="refuse">
</form>
</body>
</html>
