<?php

$intvar=10;
$strvar="23.25";
$floatvar=19.99;


echo "<h3> BEFORE TYPE CASTING </h3>";

ECHO "intvar: ";
var_dump($intvar);

echo "<br>starvar: ";
var_dump($starvar);

echo "<br>floatvar: ";
var_dump($floatvar);	


$intTOFloat=(float)$intvar;
$strTOInt=(int)$starvar;
$floatTOInt=(int)$floatvar;


echo "<h3> AFTER TYPE CASTING </h3>";
echo "intTOFloat: ";
var_dump($intTOFloat);

echo "<br>strTOInt: ";
var_dump($strTOInt);

echo "<br>floatTOInt: ";
var_dump($floatTOInt);


?>