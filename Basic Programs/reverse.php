<?php

$org = "LAPTOP";
$rev = "";

for ($i = 0; $i < strlen($org); $i++) {
  $rev = $org[$i] . $rev;
}

echo "Original string: ". $org;
echo "<br>";
echo "Reversed string: " . $rev;

?>
