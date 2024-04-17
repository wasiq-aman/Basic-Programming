<?php

function table($start,$end,$table){

echo "Enter the starting & ending point of the table and which table you want to print <br>";

for($i=$start;$i<=$end;$i++){
    echo "$table * $i = " . ($table * $i) . "<br>";
    
}}

table(1,10,5);

?>