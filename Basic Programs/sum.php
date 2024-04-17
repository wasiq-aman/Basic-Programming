<?php

function sum_of_natural_numbers($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}

$number = 10;
$sum = sum_of_natural_numbers($number);
echo "The sum of the first $number natural numbers is: ";
for ($i = 1; $i <= $number; $i++) {
    if ($i != $number) {
        echo "$i+";
    } else {
        echo "$i=";
    }
}
echo "$sum";

?>
