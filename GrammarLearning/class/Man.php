<?php

/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/10
 * Time: 下午1:51
 */
require_once 'People.php';
class Man extends  People
{
    //继承
    public function __construct($age, $name)
    {
        parent::__construct($age, $name, '男');
    }

    public function hi() {
        parent::hi();//调用父类
        echo 'Nan.'.$this->getName().' say hi';
    }

}