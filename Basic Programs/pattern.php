<?php

// 1

for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
 echo"*";
    }
    echo"<br>";
}

echo"<br>";

// 2

for($i=0;$i<5;$i++){
    $char ='A';
    for($j=0;$j<=$i;$j++){
 echO $char++;
    }
    echo"<br>";
}

echo"<br>";

// 3

for($i=0;$i<5;$i++){
    $num =1;
    for($j=0;$j<=$i;$j++){
 echO $num++;
    }
    echo"<br>";
}

echo"<br>";

// 4

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    $mul = 1;
    for ($k = 1; $k <= $i; $k++) {
        $mul *= $k;
    }
    $spaces = 5 - $i; 
    for ($s = 1; $s <= $spaces; $s++) {
        echo "&nbsp;";
    }
    echo " = $mul<br>";
}

echo"<br>";

// 5

for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 5 - $i; $j++) {
        echo "&nbsp;";
    }
    for ($k = 0; $k < 2 * $i + 1; $k++) {
        echo "*";
    }
    echo "<br>";
}

echo"<br>";

//6

$rows = 6;
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        $result = $i * $j;
        echo $result . " ";
    }
    echo "<br>";
}

echo"<br>";

//7

$rows = 3;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = $rows; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= (2 * $i) - 1; $k++) {
        echo "*&nbsp;";
    }
    echo "<br>";
}
for ($i = $rows - 1; $i >= 1; $i--) {
    for ($j = $rows; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= (2 * $i) - 1; $k++) {
        echo "*&nbsp;";
    }
    echo "<br>";
}

?>









