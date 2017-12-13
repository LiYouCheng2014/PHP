<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/12
 * Time: 下午10:54
 */

// 存储在浏览器,方便与js交换数据,方便获取用户信息,浏览器可能禁用cookie,替代方案URL参数
setcookie('name','jikexueyuan');
setcookie('age','12');
setcookie('score','98');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Document</title>

    <script>
        alert(document.cookie);
    </script>
</head>
<body>

</body>
</html>

//header('Location:a.php');//跳转