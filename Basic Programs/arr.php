<?php

$arr = array(4, 45, 9, 0, 6);

function findMinMax($arr) {
    $min = $arr[0];
    $max = $arr[0];

    foreach ($arr as $value) {
        if ($value < $min) {
            $min = $value;
        }
        if ($value > $max) {
            $max = $value;
        }
    }
    return array('min' => $min, 'max' => $max);
}

$minMax = findMinMax($arr);

echo "Minimum Value is " .$minMax['min'];
echo"<br>";
echo "Maximum Value is " .$minMax['max'];

?>


