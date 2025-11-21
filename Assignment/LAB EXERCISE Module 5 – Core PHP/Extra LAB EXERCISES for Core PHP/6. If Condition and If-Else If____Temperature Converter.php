
<?php

$temperature=109;
$unit="F";

ECHO "<H3> TEMPERATURE INPUT: $temperature </H3>"; 

IF($unit=="C")
{
	$fahrenheit=($temperature*9/5)+32;
	echo "$temperature°C = $fahrenheit°F";
}
elseif($unit=="F")
{
	$celsius=($temperature-32)*5/9;
	echo "$temperature°F = $celsius°C";
}
else
{
	echo "Invalid unit Please use 'C' OR 'F'.";
}

?>