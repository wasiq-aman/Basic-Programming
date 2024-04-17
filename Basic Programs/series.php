<!-- 4) GENERATE GIVEN SERIES (WHILE/FOR)
	1) 1 4 9 16 25 -->

<?php

echo "Series: ";
for ($i = 1; $i <= 5; $i++) {
    $number = $i * $i;
    echo "$number ";
}

echo"<br>";
// 1 3 6 10 15 21 

echo "Series: ";
for ($i = 1; $i <= 5; $i++) {
    $number = $i + $i ;
    echo "$number ";
}

?>