<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/10
 * Time: 下午10:14
 */

$time = time();
//echo $time;

//echo date_default_timezone_get();
date_default_timezone_set('Asia/Shanghai');//设置时区
echo date('Y-m-d H:i:s');