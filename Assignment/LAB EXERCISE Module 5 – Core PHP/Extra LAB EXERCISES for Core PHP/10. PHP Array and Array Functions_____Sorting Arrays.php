

<?php


$fruits=array("Banana", "Apple", "Mango", "Orange");


echo "<h3> ORIGINAL ARRAY </h3> ";
print_r($fruits);


sort($fruits);
echo "<h4> SORTED WITH SORT() </h4> ";
print_r($fruits);


rsort($fruits);
echo "<h4> SORTED WITH RSORT() </h4> ";
print_r($fruits);



$prices=array("Mango" => 50, "Banana" => 20, "Apple" => 40);
asort($prices);
echo "<h4> SORTED WITH ASORT() (BY VALUE) </h4> ";
print_r($prices);


ksort($prices);
echo "<h4> SORTED WITH KSORT() (BY VALUE) </h4>";
print_r($prices);


?>