<?php
/**
 * Created by PhpStorm.
 * User: 黑山老妖
 * Date: 2018/11/8
 * Time: 8:31
 */
echo sixOne(50,2);

/**
 * 定义一个函数，有两个参数，一个参数为学生总数，另一个参数为随机的倒霉蛋儿之后的同学
 * 这个题可以使用一些php函数来方便解决 首先循环出每个学生的编号 之后将其组成一个数组 点到名的使用函数弹出数组
 * 循环至最后一个即可
 */

function sixOne($n,$m)
{
    echo "<pre>";
    $a = 1;
    $arr = range(0,$n-1);
    while(true){
        if(count($arr)==1){
            return array_keys($arr)[0];
        }
        foreach($arr as $key=>$val){
            $a++;
            if($a==$m-1){
                unset($arr[$key]);
                $a=0;
            }
        }
    }
}