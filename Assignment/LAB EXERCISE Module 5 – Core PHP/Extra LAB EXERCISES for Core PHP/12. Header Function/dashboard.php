<?php

echo "Page Redirect Based on Condition";


$login=false;

if(!$login)
{
	header("login.php");
	exit();
}

else 
{
    echo "<h3>Welcome to your dashboard!</h3>";
}


?>
