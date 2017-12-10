<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/10
 * Time: 上午10:15
 */

$str = 'hello php Java C# C++';

//查找字符串返回位置
$index = strpos($str,'o');
echo  $index.'<br>';

//截取字符串
$str1 = substr($str,2);
echo $str1.'<br>';

//字符串分割 1
$result = str_split($str,3);
print_r($result);

echo '<br>';

//字符串分割 2
$result1 = explode(' ',$str);
print_r($result1);

echo '<br>';

$str2 = "$str<br>Objective-C ";