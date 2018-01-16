<?php


$q = isset($_POST['q']) ? $_POST['q'] : '';
if (is_array($q)) {
    $sites = array(
        'RUNOOB' => 'www.runoob.com',
        'GOOGLE' => 'www.google.com',
        'TABBAO' => 'www.taobao.com'
    );

    foreach ($q as $val) {
        echo $sites[$val].PHP_EOL;
    }
}
else {
    ?>

    <form action="" method="post">
        <input type="checkbox" name="q[]" value="RUNOOB">RUNOOB<br>
        <input type="checkbox" name="q[]" value="GOOGLE">GOOGLE<br>
        <input type="checkbox" name="q[]" value="TABBAO">TABBAO<br>
        <input type="submit" value="提交">
    </form>

    <?php
}
?>
