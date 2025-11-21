<?php


function calculate($sum1, $sum2 ,$operator)
{
	switch($operator)
	{
		case '+': return $sum1+$sum2;
		case '-': return $sum1-$sum2;
		case '*': return $sum1*$sum2;
		case '/': return ($sum2!=0)?$sum1/$sum2: "Cannot divide by zero";
		default: return "Invalid operator";
	}
}

echo "Addition: " . calculate(510, 5, '+') . "<br>";
echo "Multiply: " . calculate(40, 55, '*') . "<br>";
echo "subtract: " . calculate(780, 84, '-') . "<br>";
echo "Divide: " . calculate(417, 75, '/') . "<br>";

?>