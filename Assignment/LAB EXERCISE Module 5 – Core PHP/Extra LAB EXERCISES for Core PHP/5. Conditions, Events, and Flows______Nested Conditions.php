
<?php

$n=-15;

echo "<h3> Number Check </h3>";


if($n>0)
{
	echo "The number is POSITIVE.<br>";
	if($n%5==0)
	{
		echo "it is even. ";
	}
	else
	{
		echo "it is odd.";
	}
}

elseif($n<0)
{
	echo "The number is Nagative.<br>";
	if($n%3==0)
	{
		echo "it is even.";
	}
	else
	{
		echo "it is odd.";
	}		
}
else
{
	echo "The Number is zero.<br>";
	echo "zero is even.";
}

?>


