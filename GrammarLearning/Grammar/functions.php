<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/10
 * Time: 上午9:18
 */

function traceHelloPhp () {
    echo "说hello";
}

//traceHelloPhp();
//
//
//$func = 'traceHelloPhp';
//$func();

function sayHello($name) {
    echo 'hello'.$name.'<br/>';
}
sayHello('lisan');

function tranceNumber($a,$b) {
    echo "a = $a,b = $b <br>";
}
tranceNumber(3,5);

function add($a,$b) {
    return $a + $b;
}

echo add(5,1);