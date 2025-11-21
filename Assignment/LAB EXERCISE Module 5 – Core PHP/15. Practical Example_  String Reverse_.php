<?php


function reverseString($str)
{
	$reversed='';
	for($i=strlen($str)-1;$i>=0;$i--)
	{
		$reversed.=$str[$i];
	}
	return $reversed;
}

$original='Hello';
echo "original: $original<br>";
echo "Reversed: ".reverseString($original);

?>