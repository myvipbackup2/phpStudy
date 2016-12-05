<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2016/12/5 0005
 * Time: 21:41
 */

//九九乘法表

for ($i=1;$i<=9;$i++){
    for ($j=1;$j<=$i;$j++){
        echo $i.'&times'.$j.'='.$i*$j.' ';
    }
    echo '<br>';
}
