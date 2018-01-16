<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2018/1/4
 * Time: 下午8:18
 */

session_start();


if (isset($_SESSION["views"])) {
    unset($_SESSION["views"]);
    session_destroy();
}

$_SESSION["views"] = 1;
?>

<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<?php
echo "浏览量:".$_SESSION["views"];
?>

</body>
</html>
