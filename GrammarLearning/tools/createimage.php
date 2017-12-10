<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/10
 * Time: 下午10:50
 */

$img = imagecreate(400,300);
imagecolorallocate($img,255,255,255);


imageellipse($img,200,200,50,50,imagecolorallocate($img,255,0,0));

header('Content-type:image/png');
imagepng($$img);