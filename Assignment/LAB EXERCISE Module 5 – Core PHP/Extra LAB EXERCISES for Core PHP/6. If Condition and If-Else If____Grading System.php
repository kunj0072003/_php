
<?php

$marks=79;

ECHO "<H3> STUDENT MARKS: $marks </H3>"; 

if($marks>=90)
{
	echo "GRADE: A :)";
}
elseif($marks>=80)
{
	echo "GRADE: B (:";
}
elseif($marks>=70)
{
	echo "GRADE: C   ): ";
}
elseif($marks>=60)
{
	echo "GRADE: D :(";
}
else
{
	echo "GRADE: :|";
}

?>