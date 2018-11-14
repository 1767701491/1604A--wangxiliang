<?php
/**
 * Created by PhpStorm.
 * User: 黑山老妖
 * Date: 2018/11/14
 * Time: 8:36
 */
/**
 * 编写一个函数，要求传入两个参数计算出和，要求不能使用+-*\/等运算符
 * 将两个参数直接写入一个空数组之后使用数组函数array_sum求和返回即可
 */


echo oneAndTwo(100,300);



function oneAndTwo($one,$two)
{
    return array_sum([$one,$two]);
}