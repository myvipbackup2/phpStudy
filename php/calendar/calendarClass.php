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

    public function prevYear($year, $month)
    {
        $year--;
        if ($year <= 1970) {
            $year = 1970;
        }
        return "year=$year&month=$month";
    }

    public function prevMonth($year, $month)
    {
        if ($month == 1) {
            $month = 12;
            $year--;
        } else {
            $month--;
        }
        return "year=$year&month=$month";
    }

    public function nextYear($year, $month)
    {
        $year++;
        if ($year >= 2038) {
            $year = 2038;
        }
        return "year=$year&month=$month";
    }

    public function nextMonth($year, $month)
    {
        if ($month == 12) {
            $month = 1;
            $year++;
        } else {
            $month++;
        }
        return "year=$year&month=$month";
    }

    public function changeDays()
    {
        echo "<tr>";
        echo "<td><a href='?" . $this->prevYear($this->year, $this->month) . "'>&lt;&lt;</a></td>";
        echo "<td><a href='?" . $this->prevMonth($this->year, $this->month) . "'>&lt;</a></td>";
        echo "<td colspan='3'>" . $this->year . "年" . $this->month . "月" . "</td>";
        echo "<td><a href='?" . $this->nextMonth($this->year, $this->month) . "'>&gt;</a></td>";
        echo "<td><a href='?" . $this->nextYear($this->year, $this->month) . "'>&gt;&gt;</a></td>";
        echo "</tr>";
    }

}