<?php


$q = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';
if ($q) {
    if ($q == 'RUNOOB') {
        echo 'www.runoob.com';
    }
    else if ($q == 'GOOGLE') {
        echo 'www.google.com';
    }
    else {
        echo 'www.taobao.com';
    }
}
else {
    ?>

    <form action="" method="get">
        <input type="radio" name="q" value="RUNOOB" />RUNOOB
        <input type="radio" name="q" value="GOOGLE" />GOOGLE
        <input type="radio" name="q" value="TABBAO" />TABBAO
        <input type="submit" value="提交">
    </form>

    <?php
}
?>
