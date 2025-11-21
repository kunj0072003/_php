

<?php

date_default_timezone_set("Asia/Kolkata");

$today=date("Y-m-d");

$birthday=date("Y") . "-08-15";

if(startotime($today)>strtotime($birthday))
{
	$birthday=date("Y", startotime("+1 year")). "-08-15";
}

$todaydate=new datetime($today);
$birthdaydate=new datetime($birthday);

$interval=$todaydate->diff($birthdaydate);

echo "<h3> TIME DIFFERENCE <h3>"

$merged=array_merge($array1,$array2);
$difference=array_diff($array1,$array2);

echo "<h3> MERGED ARRAY </h3>";
echo "TODAY DATE : $today<br>";
echo "NEXT BIRTHDAY : $birthday<br>";
echo "DAYS UNTIL NEXT BIRTHDAY : " . $interval->days . "days";


?>