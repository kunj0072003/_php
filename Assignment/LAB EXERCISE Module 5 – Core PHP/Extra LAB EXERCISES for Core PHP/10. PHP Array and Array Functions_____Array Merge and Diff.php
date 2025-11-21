

<?php

$array1=array("Red","Green","Blue");
$array2=array("Yellow","Green","Pink");

$merged=array_merge($array1,$array2);
$difference=array_diff($array1,$array2);

echo "<h3> MERGED ARRAY </h3>";
print_r($merged);

echo "<h3> DIFFERENCE (IN array1 BUT NOT IN array2) </h3>";
print_r($difference);



?>