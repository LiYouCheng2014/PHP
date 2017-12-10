<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/10
 * Time: 下午10:33
 */

//写入数据
//$fw = fopen('data','w');
//if ($fw) {
//    fwrite($fw,'Hello PHP');
//    fclose($fw);
//    echo 'OK';
//}
//else {
//    echo '创建文件失败';
//}


//读出数据
$fr = @fopen('data','r');
//if ($fr) {
//    $content = fgets($fr);//只读取一行
//    fclose($fr);
//    echo $content;
//}

//while (!feof($fr)) {
//    $content = fgets($fr);
//    echo $content;
//}
//fclose($fr);

echo file_get_contents('data');


//$fo =