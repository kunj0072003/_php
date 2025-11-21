<?php

date_default_timezone_set("Asia/Kolkata");

echo "Default Date and Time: " . date("Y-m-d H:i:s"). "<br><br>";


//Format 1: Day-Month-Year
echo "Format 1 (d-m-Y):" . date("d-m-y")."<br>";	

//Format 2: Month/Day/Year
echo "Format 2 (m/d/Y):" . date("m/d/y")."<br>";

//Formate 3: Full Day  and month names
echo "Format-3 (i,F j, Y):" . date("i,F j, y")."<br>";

//Format 4: 12-hour formate with am/pm
echo "Format-4 (h:i:a):" . Date("h:i:a")."<br>";

//Format 5: 24-hour format with seconds
echo "Format-5 (h:i:s): " . Date("h:i:s")."<br>";

//Format 6: Date with timezone
echo "Format-6 (r):" . Date("r")."<br>";


?>