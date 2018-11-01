<?php
$str = 370;
var_dump(flower($str));
















function flower($event)
{
    $arr = str_split($event);
    $are = array();
    foreach($arr as $key=>$val){
        $are[$key]= $val*$val*$val;
    }
    $bool = array_sum($are);
    if($bool==$event){
        return true;
    }else{
        return false;
    }
}