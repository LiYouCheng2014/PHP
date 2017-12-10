<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>控制</title>
</head>
<body>

</body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: shiios
 * Date: 2017/12/10
 * Time: 上午9:29
 */


function getLevel ($score) {
//    if($score > 90) {
//        return "优秀";
//    }
//    elseif($score > 80) {
//        return "良好";
//    }
//    else {
//        return "差";
//    }

    switch (intval($score/10)) {
        case 10:
        case 9:
            return "优秀";
        case 8:
            return "良好";
        case 7:
            return "好";
        case 6:
            return "可以";
        default:
            return "差";
    }

//    $resutl = "差";
//    switch (intval($score/10)) {
//        case 10:
//        case 9:
//            $resutl = "优秀";
//            break;
//        case 8:
//            $resutl = "良好";
//            break;
//        case 7:
//            $resutl = "好";
//            break;
//        case 6:
//            $resutl = "可以";
//            break;
//        default:
//            $resutl = "差";
//            break;
//    }
//    return $resutl;
}

echo getLevel(91);