<?php
/**
 * Created by PhpStorm.
 * User: 黑山老妖
 * Date: 2018/11/6
 * Time: 8:42
 */
echo one(100,1300);












function one($a,$b)
{
    $c = range($a,$b);
    $c = implode($c);
    $arr = str_split($c);
    return array_count_values($arr)[1];
}