<?php

$name="kumar";
$age=32;
$price=12000;
$skills=array("HTML","CSS","PHP");

echo "<h3> USING echo:</h3>";
echo "Name: " . $name . "<br>";
echo "Age:$age<br>";

print "<h3> USING print:</h3>";
print "Price: $price<br>";


echo "<h3> USING var_dump:</h3>";
var_dump($skills);
echo "<br>";
var_dump($price);


?>