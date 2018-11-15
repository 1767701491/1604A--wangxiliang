<?php
/**
 * Created by PhpStorm.
 * User: 黑山老妖
 * Date: 2018/11/15
 * Time: 8:32
 */
/**
 * 由于数组是递增的，所以S不得超过数组最后两个数字的和，如果超过直接返回false
 * 然后使用二分查找将超过S的数值全部剔除
 * 然后使用冒泡排序的方式将符合条件的数放在一个数组中
 * 循环得出的新数组，使用array_product计算乘积后放在一个数组中
 * 将数组进行排序
 * 返回第一个数值
 */
$arr = range(5,80);
echo upAndS($arr,200);

function upAndS($array,$s)
{
    $a = end($array);
    $b = prev($array);
    if(($a+$b)<$s) return false;
    foreach($array as $key=>$val){
        if($val>$s){
            unset($array[$key]);
        }
    }
    $arr = array();
    foreach($array as $key=>$val){
        foreach($array as $k=>$v){
            if($val!=$v){
                $a = $val+$v;
                if($a==$s){
                    $arr[$key] = array($val,$v);
                }
            }
        }
        unset($array[$key]);
    }
    $are = array();
    foreach($arr as $key=>$val){
        $are[] = array_product($val);
    }
    sort($are);
    return $are[0];
}