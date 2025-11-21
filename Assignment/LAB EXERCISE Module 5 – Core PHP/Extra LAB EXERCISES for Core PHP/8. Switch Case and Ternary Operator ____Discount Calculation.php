<?php


$price = 750; 

echo "<h3>Discount Calculation</h3>";

$discount = ($price > 500) ? ($price * 0.10) : 0;
$finalPrice = $price - $discount;

echo "Original Price: Rs. $price<br>";
echo "Discount: Rs. $discount<br>";
echo "Final Price: Rs. $finalPrice";


?>
