<?php

$loggedIn=true;

if($loggedIn)
{
	header("location:welcome.php");
	exit();
}
else
{
	echo "login failed !!";
}

?>