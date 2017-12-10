<?php

/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/10
 * Time: 下午1:36
 */
class People
{
    /**
     * Man constructor.
     * @param $age
     * @param $name
     */
    public  function  __construct($age,$name,$sex)
    {
//        echo '构造方法';
        $this->_age = $age;
        $this->_name = $name;
        $this->sex = $sex;

        People::$NUM++;
        if (People::$NUM > People::MAX_MAN_NUM) {
            throw new Exception("不能创建更多的人");
        }
    }


    /**
     * @return 名字
     */
    public function getName () {
        return $this->_name;
    }


    /**
     * @return 获取年龄
     */
    public function getAge () {
        return $this->_age;
    }//成员方法


    public function hi() {
        echo $this->_name.' say  hello';
    }

    private  $_age,$_name,$_sex;

    //静态变量
    private  static  $NUM = 0;
    const MAX_MAN_NUM = 200;

    //类方法
    static public function sayHello () {
        echo 'Hello Man';
    }
}