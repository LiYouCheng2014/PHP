<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/12
 * Time: 下午10:54
 */

//存储在服务器,高效,安全,不依赖浏览器环境,服务器端会为每一个用户用一个ID来标识

session_start();
//echo session_id();
$_SESSION['name'] = 'shixiaofan';

header('Location:a.php');