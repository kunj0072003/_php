<?php

if(isset($_FILES['uploadfile'])&&$_FILES['uploadfile']['error']==0)
{
	$uploadir="upload/";
	$filename=basename($_FILES['uploadfile']['names']);
	$filepath=$uploadir . $filename;
	
	
	if(!is_dir($uploadir))
		
		{
			mkdir($uploadir,0755,true);
		}
		
		
	if(move_uploaded_file($_FILES['uploadfile']['tmp_name'],$filepath))
	{
		echo "<h3> FILE UPLOADED SUCCESSFULLY! </h3>";
		echo "FILE NAME: $filename<br>";
		echo "FILE TYPE: " . $_FILES['uploadfile']['type'] . "<br>";
		echo "<a href='$filepath' download>CLICK here to download the file</a>";
	}		
	else
	{
		echo "failed to move uploaded file.";
	}
	else
	{
		echo "NO file uploaded or error.";
	}
} 


?>