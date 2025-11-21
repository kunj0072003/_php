<?php

$input=array(1, 0, 2, 0, 3, 0, 4, 5, 0);

$nonzero=array();
$zeros=array();

foreach($input as $value)
{
	if($value==0)
	{
		$zeros[]=$value;
	}
	else
	{
		$nonzero[]=$value;
	}	
}

$result=array_merge($nonzero, $zeros);

echo "original Array: ";
print_r($input);
echo "<br>Modified Array: ";
print_r($result);	


?>