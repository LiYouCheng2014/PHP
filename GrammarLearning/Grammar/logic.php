<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/10
 * Time: 上午9:51
 */

function traceNum() {
    for ($i = 0; $i < 100; $i++) {
        if ($i%2==0 && $i%3 == 0) {
            echo "2整除".$i."<br>";
        }
    }
}

traceNum();