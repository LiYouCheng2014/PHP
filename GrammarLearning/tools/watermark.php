<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/10
 * Time: 下午10:58
 */

$img = imagecreatefrompng('发现.png');

imagestring($img,5,5,5,'123',imagecolorallocate($img,0,255,0));

header('Content-type:image/png');
imagepng($img);
