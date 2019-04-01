<?php
/**
 * Created by PhpStorm.
 * User: supeng
 * Date: 2019-04-01
 * Time: 09:45
 */
/**
 *
 * @param $n
 * @return mixed
 */
function Fibonacci($n)
{
    if ($n <= 1) {
        return $n;
    }
    return Fibonacci($n-1)+Fibonacci($n-2);
}

function Fibonacci_1($n)
{
    static $arr = [];
    if ($n <= 1) {
        return $n;
    }
    if (!empty($arr[$n])){
        return $arr[$n];
    }
    $arr[$n] = Fibonacci($n-1)+Fibonacci($n-2);
    return $arr[$n];
}

echo Fibonacci_1(32);