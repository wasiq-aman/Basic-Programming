
<?php

//Array
echo "Array ";
echo "<br>";
$array=array("Wasiq","Aman",23,"wasiqaman03@gmail.com");  
echo "Bio Data:  $array[0], $array[1], $array[2] and $array[3]";  
echo "<br><br>";

//Associative Array 
echo "Associative Array ";
echo "<br>";
    $arr=array(
      "Name"=>"Wasiq",
      "Father Name"=>"Aman",
      "Age"=>23,
      "Email"=>"wasiqaman03@gmail.com"
    );
    foreach ($arr as $i => $j) {
        echo "$i: $j <br>";
      }
echo "<br><br>";

//Multidimensional array 
echo "Multidimensional Array ";
echo "<br>";
$students = array(
    array("name" => "John", "age" => 20, "grade" => "A"),
    array("name" => "Alice", "age" => 22, "grade" => "B"),
    array("name" => "Bob", "age" => 21, "grade" => "C")
);
echo $students[0]["name"]; 
echo "<br>";
echo $students[1]["age"]; 
echo "<br>";
echo $students[2]["grade"];

?>
