<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/11
 * Time: 下午11:27
 */

if (isset($_GET['name']) && $_GET['name']) {
    echo $_GET['name'];
}
else {
    echo "请输入名字";
}