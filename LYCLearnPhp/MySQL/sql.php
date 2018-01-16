<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2018/1/6
 * Time: 下午6:05
 */

//echo phpinfo();

$servername = "103.45.10.50";
$username = "lyc_php";
$password = "1234567890";

$conn = mysqli_connect($servername, $username, $password);
if( !$conn )
{
    die('连接错误9: ' . mysqli_error());
}
echo '连接成功2<br />';

//
////创建数据库
//$sql = 'CREATE DATABASE lyc_db';
//$retval = mysqli_query($conn,$sql );
//if(! $retval )
//{
//    die('创建数据库失败: ' . mysqli_error($conn));
//}
//echo "数据库 lyc_db 创建成功";


$flag = mysqli_select_db($conn,'lyc_db');
if ($flag) {
    echo "切换成功<br />";
}
else {
    echo "切换失败<br />";
}


////创建表
//$sql = "CREATE TABLE lyc_tbl( ".
//    "runoob_id INT NOT NULL AUTO_INCREMENT, ".
//    "runoob_title VARCHAR(100) NOT NULL, ".
//    "runoob_author VARCHAR(40) NOT NULL, ".
//    "submission_date DATE, ".
//    "PRIMARY KEY ( runoob_id ))ENGINE=InnoDB DEFAULT CHARSET=utf8; ";
//$retval = mysqli_query($conn,$sql);
//if (!$retval ) {
//    die("数据表创建失败：<br />".mysqli_error($retval));
//}
//echo  "数据表创建成功<br />";

//设置编码，防止中文乱码
mysqli_query($conn,"set names utf8");

////插入数据
//$arr = [ "学习PHP","学习MySQL","JAVA教程","学习Python" ];
//for ($i = 0; $i < count($arr);$i++) {
//    $sql = "INSERT INTO lyc_tbl".
//        "(runoob_title,runoob_author,submission_date) ".
//        "VALUES".
//        "('$arr[i]','liyoucheng','2016-03-06')";
//    $retval = mysqli_query($conn,$sql );
//    if(! $retval )
//    {
//        die('插入数据失败: ' . mysqli_error($conn)).$i;
//    }
//    echo "插入数据成功".$i."<br/>";
//}

//    $sql = "INSERT INTO lyc_tbl".
//        "(runoob_title,runoob_author,submission_date) ".
//        "VALUES".
//        "('iOS开发','liyoucheng','2016-03-06')";
//    $retval = mysqli_query($conn,$sql );
//    if(! $retval )
//    {
//        die('插入数据失败: ' . mysqli_error($conn)).$i;
//    }
//    echo "插入数据成功"."<br/>";

//// 查询数据
//$sql = 'SELECT runoob_id, runoob_title, runoob_author, submission_date FROM lyc_tbl';
//
//$retval = mysqli_query( $conn, $sql );
//if(! $retval )
//{
//    die('无法读取数据: ' . mysqli_error($conn));
//}

// 查询数据
$sql = 'SELECT runoob_id, runoob_title, runoob_author, submission_date FROM lyc_tbl WHERE runoob_title="iOS开发"';

$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
    die('无法读取数据: ' . mysqli_error($conn));
}

//echo '<h2>菜鸟教程 mysqli_fetch_array 测试<h2>';
//echo '<table border="1"><tr><td>教程 ID</td><td>标题</td><td>作者</td><td>提交日期</td></tr>';
//while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
//{
////    var_dump($row);
//    echo "<tr><td> {$row['runoob_id']}</td> ".
//        "<td>{$row['runoob_title']} </td> ".
//        "<td>{$row['runoob_author']} </td> ".
//        "<td>{$row['submission_date']} </td> ".
//        "</tr>";
//}
//echo '</table>';}



//echo '<h2>菜鸟教程 mysqli_fetch_assoc 测试<h2>';
//echo '<table border="1"><tr><td>教程 ID</td><td>标题</td><td>作者</td><td>提交日期</td></tr>';
//while($row = mysqli_fetch_assoc($retval))
//{
////    var_dump($row);
//    echo "<tr><td> {$row['runoob_id']}</td> ".
//        "<td>{$row['runoob_title']} </td> ".
//        "<td>{$row['runoob_author']} </td> ".
//        "<td>{$row['submission_date']} </td> ".
//        "</tr>";
//}
//echo '</table>';


echo '<h2>菜鸟教程 mysqli_fetch_array 测试<h2>';
echo '<table border="1"><tr><td>教程 ID</td><td>标题</td><td>作者</td><td>提交日期</td></tr>';
while($row = mysqli_fetch_array($retval,MYSQLI_NUM))
{
//    var_dump($row);
    echo "<tr><td> {$row[0]}</td> ".
        "<td>{$row[1]} </td> ".
        "<td>{$row[2]} </td> ".
        "<td>{$row[3]} </td> ".
        "</tr>";
}
echo '</table>';
//释放内存
mysqli_free_result($retval);

mysqli_close($conn);










//删除表
//$sql = "DROP TABLE runoob_tbl ";
//$retval = mysqli_query($conn,$sql);
//if (!$retval ) {
//    die("数据表删除失败：<br />".mysqli_error($retval));
//}
//echo  "数据表删除成功<br />";





//






//删除数据库
//$sql = 'DROP DATABASE sxf_db';


