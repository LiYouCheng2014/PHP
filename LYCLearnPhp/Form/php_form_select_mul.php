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
    <select multiple="multiple" name="q[]">
        <option value="">选择一个站站点</option>
        <option value="RUNOOB">RUNOOB</option>
        <option value="GOOGLE">GOOGLE</option>
        <option value="TABBAO">TABBAO</option>
    </select>
    <input type="submit" value="提交">
</form>

<?php
}
?>
