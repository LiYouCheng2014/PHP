
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/11
 * Time: 下午11:51
 */

//print_r($_FILES);
$file = $_FILES['file'];
$fileName = $_FILES['name'];
move_uploaded_file($file['tmp_name'],$fileName);

echo "<img src='$fileName'>";

?>

</body>
</html>

