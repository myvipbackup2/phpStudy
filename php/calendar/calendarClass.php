<?php

/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/13 0013
 * Time: 13:17
 */
class calendarClass
{
    private $year;
    private $month;
    private $days;
    private $weeknum;

    public function __construct()
    {
        $this->year = $_GET['year'] ? $_GET['year'] : date('Y');
        $this->month = $_GET['month'] ? $_GET['month'] : date('m');
        $this->days = date('t', mktime(0, 0, 0, $this->month, 1, $this->year));
        $this->weeknum = date('w', mktime(0, 0, 0, 2, 1, $this->year));
    }


    public function out()
    {
        echo "<table align='center' >";
        $this->changeDays();
        $this->weekList();
        $this->daysList();
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
//        先打空格 当前年当前月的1号是周几
        for ($j = 0; $j < $this->weeknum; $j++) {
            echo "<td>" . "&nbsp;" . "</td>";
        }
//        输出日期
        for ($k = 1; $k <= $this->days; $k++) {
            $j++;
            if ($k == date('d')) {
                echo "<td class='fontb'>" . $k . "</td>";
            } else {
                echo "<td>" . $k . "</td>";
            }
            if ($j % 7 == 0) {
                echo "</tr><tr>";
            }
        }

        echo "</tr>";
    }

}