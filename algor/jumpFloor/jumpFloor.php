<?php
/**
 * Created by PhpStorm.
 * User: supeng
 * Date: 2019-04-02
 * Time: 10:07
 */
function jumpFloor($number)
{
    static $arr = [];
    if($number<=2)
    {
        return $number;
    }
    if(empty($arr[$number])){
        $arr[$number] = jumpFloor($number-1)+jumpFloor($number-2);
    }
    return $arr[$number];
}

var_dump(jumpFloor(100));