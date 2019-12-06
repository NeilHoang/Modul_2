<?php
//$x = 0;
//for ($i = 1; $i <= 10; $i++){
//    if ($i%2 == 0){
//        $x = $x + $i +2;
//        echo $x;
//    }
//}
$sum = 0;
$arr = [1,7,3,4,5];
for ($i = 0; $i < count($arr); $i++){
    $sum = $sum + $arr[$i];
}
echo $sum;

//$sum = 0;
//for ($i = 0 ; $i <= 3; $i++) {
//    if ($i % 2 != 0) {
//        $sum += $i;
//    }
//}
//echo $sum;
