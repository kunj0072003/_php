<?php 



function ispalindrome($string)
{
	
	$cleaned=strtolower(preg_replace('/[^A-Za-z0-9]/','',$string));
	$length=strlen($cleaned);	
	
	for($k=0;$k<=$length/2;$k++)
	{
		
		if($cleaned[$k] !== $cleaned[$length-$k-1])
		{
				return false;
		}	

	}
	return true;
}



$inputstring="RACECAR";

echo "<h3> PALINDROME CHECKER </h3>";
echo "INPUT:  $inputstring <br>";
echo ispalindrome($inputstring) ? "IT IS PALINDROME." : "IT IS NOT PALINDROME.";






 ?>
