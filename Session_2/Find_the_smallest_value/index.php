<?php
$number = array(5,4,6,3,7,8,1,-1);

class MinNumber {
    function min($array) {
        $min = $array[0];
        $lenght = count($array);
        for ($i = 0; $i < $lenght; $i ++ ) {
            if ($min > $array[$i]) {
                $min = $array[$i];
            }
        }
        echo $min;
    }
}
$checkMin = new MinNumber();
$checkMin ->min($number);
?>
