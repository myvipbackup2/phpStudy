<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2016/12/5 0005
 * Time: 22:39
 */

echo '第一种九九乘法表带表格';

echo '<table border="1">';
for ($i = 1; $i <= 9; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $i; $j++) {
        echo '<td>';
        echo $i . '&times' . $j . '=' . $i * $j . ' ';
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';

echo '<br>';

echo '第二种九九乘法表带表格';

echo '<table border="1">';
for ($i = 9; $i >= 1; $i--) {
    echo '<tr>';
    for ($j = 1; $j <= $i; $j++) {
        echo '<td>';
        echo $i . '&times' . $j . '=' . $i * $j . ' ';
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
