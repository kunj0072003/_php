<?php

$globalvar="I AM GLOBAL";

function testscope()
{
	$localvar="I AM LOCAL";
	
	echo "inside function - local variable: $localvar<br>";
	
	
	global $globalvar;
	echo "inside function - global variable: $globalvar<br>";
}

testscope();

echo "outside function - global variable: $globalvar<br>";

?>