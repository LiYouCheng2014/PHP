<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/10
 * Time: 上午9:43
 */

for ($i = 0; $i < 20; $i++) {

    if ($i == 10) {
//        跳出当次循环
//        continue;
    }

    if ($i == 10) {
        //跳出整个循环
        break;
    }

    echo  "hello".$i.'<br>';
}

$i = 0;
while ($i < 10) {
//    echo 'hello'.$i."<br>";
    $i++;
}

$i = 0;
do {
//    echo 'hello'.$i."<br>";
    $i++;
} while($i < 10);
