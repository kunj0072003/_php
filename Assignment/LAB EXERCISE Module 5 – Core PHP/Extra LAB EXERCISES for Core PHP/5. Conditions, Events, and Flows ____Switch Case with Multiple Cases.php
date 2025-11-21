
<?php

$grade="B";

ECHO "<H3> GRADE EVALUATION </H3>"; 

switch ($grade)
{
	case "A":
	CASE "B":
		ECHO "EXCELLENT :) ";
		break;
	
	case "C":
		ECHO "GOOD  (:";
		break;
	
	CASE "D":
		ECHO "Need Improvement.";
		break;
	
	case "F":	
		ECHO "fail. better luck next time.";
		break;
	
	default:
		echo "INVALID GRADE. :|";
}

?>