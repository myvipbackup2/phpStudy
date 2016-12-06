<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2016/12/2 0002
 * Time: 22:52
 */

if (isset($_GET['btn'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $fh = $_GET['fh'];
    $val = $_GET['val'];
    if (is_numeric($num1)) {
        if (is_numeric($num2)) {
            switch ($fh) {
                case '+':
                    $val = $num1 + $num2;
                    break;
                case '-':
                    $val = $num1 - $num2;
                    break;
                case '*':
                    $val = $num1 * $num2;
                    break;
                case '/':
                    $val = $num1 / $num2;
                    break;
                default:
                    echo '请选择运算符';
            }
            $result = $num1 . $fh . $num2 . '=' . $val;
        }else{
            $result = '第二个不是数字！';
        }
    }else{
        $result = '第一个不是数字！';
    }


}


?>

<!--计算器-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>计算器</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        table {
            margin: 100px auto;
            /*width: 700px;*/
        }

        h2 {
            text-align: center;
        }

    </style>
</head>
<body>
<h2>计算器</h2>
<form action="05-calculator2.php" method="get">
    <table>
        <tr>
            <td>
                <input type="text" name="num1" value="<?php echo $num1 ?>">
            </td>
            <td>
                <select name="fh" id="">
                    <option value="+" <?php if ($fh == '+') echo 'selected' ?> >+</option>
                    <option value="-" <?php if ($fh == '-') echo 'selected' ?> >-</option>
                    <option value="*" <?php if ($fh == '*') echo 'selected' ?> >&times;</option>
                    <option value="/" <?php if ($fh == '/') echo 'selected' ?> >/</option>
                </select>
            </td>
            <td>
                <input type="text" name="num2" value="<?php echo $num2 ?>">
            </td>
            <td>
                =
            </td>
            <td>
                <input disabled="disabled" type="text" name="val" value="<?php echo $val ?>">
            </td>
            <td>
                <input type="submit" name="btn">
            </td>
        </tr>
        <tr>
            <td style="background-color:#ccc;line-height: 18px" colspan="5">
                <?php
                echo '结果为：' . $result;
                ?>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
