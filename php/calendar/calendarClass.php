<?php

/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/13 0013
 * Time: 13:17
 */
class calendarClass
{

    public function out()
    {
        echo "<table align='center' >";
        $this->weekList();
        echo "</table>";
    }

    public function weekList()
    {
//        echo "测试success";
        $week = array('日', '一', '二', '三', '四', '五', '六');
        echo "<tr>";
        for ($i = 0; $i < count($week); $i++) {
            echo "<th class='fontb'>" . $week[$i] . "</th>";
        }
        echo "</tr>";
    }

    public function daysList()
    {
        echo "<tr>";

        echo "</tr>";
    }

}