<?php
/**
 * Created by PhpStorm.
 * User: 黑山老妖
 * Date: 2018/11/16
 * Time: 8:31
 */

/**
 * 定义一个函数，在一个字符串中找到第一个只出现一次的字符，如果没有则返回-1
 * 我想到的办法就是使用函数在每个字符前添加一个“，”之后使用切割函数将字符串切开
 * 再使用数组函数统计每个值出现的次数
 * 之后循环遍历数组，判断键值为1时返回stripos($str,$key);
 * 循环外返回-1
 */
$str = 'abcdefghabcdefgh';

echo first($str);


function first($str)
{
    $sr = chunk_split($str,1,',');
    $sr = rtrim($sr,',');
    $arr = explode(',',$sr);
    $cnt = array_count_values($arr);
    foreach($cnt as $key=>$val){
        if($val==1){
            return stripos($str,$key);
        }
    }
    return -1;
}