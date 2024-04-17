<?php

function is_prime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Prime Number Series:<br>";
for ($i = 2; $i <= 13; $i++) {
    if (is_prime($i)) {
        echo $i . " ";
    }
}
?>
