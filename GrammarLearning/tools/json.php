

<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/10
 * Time: 下午10:23
 */


//json格式
//[1,2,5,7,8,"hello",[6,7,8]]
//{"h":"Hello","w": "world"}


$arr = array(1,2,5,8,'hello','qjkj',array('h'=>'hello'));
print_r($arr);
//编码
echo json_encode($arr);
//解码
$str = "";
echo  json_decode($str);