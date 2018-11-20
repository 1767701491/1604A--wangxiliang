<?php
/**
 * Created by PhpStorm.
 * User: 黑山老妖
 * Date: 2018/11/20
 * Time: 8:33
 */

echo twoup(10);


function twoup($int)
{
    if(!is_int($int)) return "请输入一个整数";
    $two = base_convert($int,10,2);
    return substr_count($two,1);
}