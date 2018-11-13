<?php
/**
 * Created by PhpStorm.
 * User: 黑山老妖
 * Date: 2018/11/13
 * Time: 8:34
 */
/**
 * 文档就直接写这儿了
 * 按题目要求是不可以使用循环不可以使用乘除法不可以使用ifele等条件语句算出1+2+3一直+到N的和
 * 其实只需要简简单单的两个PHP数组函数即可实现出性能超级高的代码
 * 首先使用range函数获取到一个从1到N的数组
 * 然后使用array_sum函数返回结果即可
 */

echo upn(80);




function upn($n)
{
    $arr = range(1,$n);
    $array = array_sum($arr);
    return $array;
}