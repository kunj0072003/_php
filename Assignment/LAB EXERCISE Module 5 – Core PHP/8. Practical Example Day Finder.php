<?php

date_default_timezone_set("Asia/Kolkata");

$currentDay=date("i");

if ($currentDay=="Thursday")
{
    echo "Happy Thursday . <br>";
}

else 
{
    echo "Today is $currentDay . <br>";
}


?>
