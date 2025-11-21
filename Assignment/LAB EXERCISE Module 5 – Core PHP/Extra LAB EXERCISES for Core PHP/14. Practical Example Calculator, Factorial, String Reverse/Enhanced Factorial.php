<?php 



function factorialrecursive($n)
{
	
	if($n<=1)
	return 1;
	return $n*factorialrecursive($n-1);
	
	
}


function factorialrecursive($n)
{
	$result=1;
	for($k=1;$k<=$n;$k++)
	{
		$result*=$k;
	}
	return $result;
}


$u=5;

echo "<h3> FACTORIAL COMPARISON FOR $u </h3>";
echo "RECURSIVE" . factorialrecursive($u) . "<br>";
echo "NON-RECURSIVE" . factorialrecursive($u) . "<br>";






 ?>
