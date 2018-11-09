<?php
/**
 * Created by PhpStorm.
 * User: 黑山老妖
 * Date: 2018/11/9
 * Time: 8:31
 */

echo bigtiny(array(3,32,324));



function bigtiny($arr)
{
    $length=count($arr);

    for($i=0;$i<$length;$i++){

        for($j=$i+1;$j<$length;$j++){

            if(($arr[$i].''.$arr[$j])>($arr[$j].''.$arr[$i])){
                $temp=$arr[$i];

                $arr[$i]=$arr[$j];

                $arr[$j]=$temp;
            }
        }
    }
    return (implode('',$arr));
}