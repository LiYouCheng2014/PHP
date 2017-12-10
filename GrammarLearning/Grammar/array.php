<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/10
 * Time: 上午10:26
 */

$arr = array('age'=>18,'name'=>'理由陈');
$arr[0] = "liyou";
$arr[1] = 1;
$arr[2] = 3.14;
$arr['h'] = "te";
//
//for ($i = 0;$i < 100;$i++) {
//    array_push($arr,"item$i");
//}

print_r($arr);

echo '<br>';
$str = json_encode($arr);
echo $str;
