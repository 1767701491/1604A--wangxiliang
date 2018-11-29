<?php
/**
 * Created by PhpStorm.
 * User: 黑山老妖
 * Date: 2018/11/29
 * Time: 8:22
 */
/**
 * 数组函数
 */
$a = [1,2,3,4,5,6,7];
//1.生成一个第一个参数到第二个参数之间的数组
$b = range(1,5);
//2.返回数组值
$c = array_values($a);
//3.返回数组所有键
$d = array_keys($b);
//4.计算数组长度
$e = count($a);
//5.计算书组和
$f = array_sum($a);
//6.合并数组
$g = array_merge($a,$b);
//7.截取数组
$h = array_splice($b,4);
//8.弹出和键入
array_pop($b);
array_push($b,5);
array_shift($b);
array_unshift($b,1);
//9.返回差集
$i = array_diff($a,$b);
//10.返回交集
$j = array_intersect($a,$b);
/**
 * 字符串函数
 */
$str = '1,2,3,4,5,6,7,8,9';
$strtime = '1996/12/11';
$strtwo = 'abcdef';
//1.将字符串分割为数组
$a = explode(',',$str);
//2.将数组合并成字符串
$b = implode(',',$a);
//3.计算字符串长度
$c = strlen($b);
//4.字符串转换时间戳
$d = strtotime($strtime);
//5.将字符串以指定数量切割为字符串
$e = str_split($str);
//6.字符串倒序排序
$f = strrev($str);
//7.将第一个字母转换为大写
$g = ucfirst($strtwo);
//8.将字符串中所有字母转换为大写
$h = ucwords($strtwo);
//9
var_dump($h);
