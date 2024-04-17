<?php

function generate_tables($limit) {
    echo "Tables up to $limit:<br>";
    for ($table = 1; $table <= $limit; $table++) {
        echo "Multiplication Table for $table:<br>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$table * $i = " . ($table * $i) . "<br>";
        }
        echo "<br>";
    }
}

$limit = 3; // Change the value of $limit as desired
generate_tables($limit);

?>
