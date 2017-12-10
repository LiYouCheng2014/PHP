<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/10
 * Time: 下午1:28
 */

//require_once 'hell.php';
//$h = new Hello();
//$h->sayHello();

require_once 'jkxy/student.php';
require_once 'qjkj/student.php';
require_once 'Man.php';

//$jkxy = new \jkxy\student();
//$jkxy->sayHello();
//
//$qjkj = new \qjkj\student();
//$qjkj->sayHello();


//$man = new Man(18,20);
//echo $man->getName();
//echo $man->getAge();

//Man::sayHello();
//for ($i = 0;$i < 300;$i++) {
//    new Man(20,'里');
//}

$man = new Man(18,'li');
$man->hi();