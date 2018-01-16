<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2018/1/4
 * Time: 下午8:37
 */


$to =  "542235666@qq.com";
$subject = "参数邮件";
$message = "Hello! 这是邮件内容";
$from = "183760430@qq.com";
$headers = "From:".$from;
mail($to,$subject,$message,$headers);
echo "邮件已发送";