<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/12
 * Time: 下午11:08
 */

session_start();



//销毁session
//session_destroy();

if (isset($_SESSION['name'])) {
    echo $_SESSION['name'];
}
else {
    echo 'no name file';
}