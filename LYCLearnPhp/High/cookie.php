<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2018/1/4
 * Time: 下午8:08
 */

setcookie("user","runoob",time()+3600);
if (isset($_COOKIE["user"])) {
    echo "欢迎".$_COOKIE["user"]."!<br>";
}
else {
    echo "普通访客!<br>";
}

print_r($_COOKIE);