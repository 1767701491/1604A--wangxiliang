<?php
/**
 * Created by PhpStorm.
 * User: 黑山老妖
 * Date: 2018/11/21
 * Time: 8:26
 */
$arr = range(50,100);
echo twoTwo($arr,75);



function twoTwo($arr,$int)
{
    $count = count($arr)-1;
    $i = 0;
    while($i<=$count){
        $md = ($i+$count)/2;
        if($arr[$md]==$int){
            return round($md);
        }else if($int<$arr[$md])
        {
            $count = $md-1;
        }else
        {
            $i = $md+1;
        }
    }
    return -1;

}