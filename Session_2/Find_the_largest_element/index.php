<?php
$myArray = array(array(1,3,5), array(4,6,9), array(-6,11,5));
$length = count($myArray);
$max = $myArray[0][0];

    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < count($myArray[$i]); $j++) {
            if ($max < $myArray[$i][$j]){
                $max = $myArray[$i][$j];
            }
        }
    }
    echo $max;
?>