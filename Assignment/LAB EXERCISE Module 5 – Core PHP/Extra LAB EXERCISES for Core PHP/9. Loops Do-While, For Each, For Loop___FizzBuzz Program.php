<?php

echo "<h3> FizzBuzz from 1 to 100 </h3> ";


for($k=1;$k<=100;$k++)
{
	if($k%3==0&&$k%5==0)
	{
		echo "FizzBuzz<br>";
	}
	elseif($k%3==0)
	{
		echo "Fizz<br>";
	}
	elseif($k%5==0)
	{
		echo $k . "<br>";
	}
	else
	{
		echo $k . "<br>";
	}	
}





?>
