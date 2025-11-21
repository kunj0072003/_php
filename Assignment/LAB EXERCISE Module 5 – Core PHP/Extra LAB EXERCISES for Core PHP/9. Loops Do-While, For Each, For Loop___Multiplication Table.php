<?php

echo "<h3> MULTIPLICATION TABLE (1 TO 10) </h3> ";
echo "<table border='1' cellpadding='5'>";


for($row=1;$row<=10;$row++)
{
	echo "<tr>";
	for($col=1;$col<=10;$col++)
	{
		$product=$row*$col;
		echo "<td>$product</td>";
	}
	echo "</td>";
}

echo "</table>";





?>