<?php
function fibonacci($f){
    $n = 0;
    $n1 = 1;

    echo $n . "," . $n1;

    for ($i = 2; $i < $f; $i++) {
        $c = $n + $n1;
        echo "," . $c;

        $n = $n1;
        $n1 = $c;
    }
}

$f = 10;
fibonacci($f);
?>