<?php
/**
 * Created by PhpStorm.
 * User: liyoucheng
 * Date: 17/12/12
 * Time: 下午8:37
 */

if (isset($_POST['name']) && $_POST['name']) {
    echo $_POST['name'];
}
else {
    echo "无值";
}