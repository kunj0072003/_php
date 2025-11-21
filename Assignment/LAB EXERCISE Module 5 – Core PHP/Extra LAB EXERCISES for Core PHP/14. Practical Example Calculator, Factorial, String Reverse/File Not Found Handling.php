<?php

$file='critical.php';

if(file_exists($file))
{
	require $file;
	echo "it hear";
}
else
{
	echo "<h3> custom ERROR: critical file '$file' not found!</h3>";
}



?>

