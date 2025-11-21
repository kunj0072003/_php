<?php

$numbers=array(1, 2, 5, 8, 10, 13, 17, 22);
$even=0;
$odd=0;

foreach ($numbers as $num)
{
	if($num%2==0)
	{
		$even++;
	}
	
	else
	{
		$odd++;
	}	
}

echo "Total Even Numbers: $even<br>";
echo "Total Odd Numbers: $odd";



?>