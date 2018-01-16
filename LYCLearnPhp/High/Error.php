<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2018/1/4
 * Time: 下午10:08
 */


function checkNum($number)
{
    if ($number > 1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}

try {
    checkNum(2);
}
catch (Exception $e) {
    echo "Message:".$e->getMessage();
}

//if (filter_var())