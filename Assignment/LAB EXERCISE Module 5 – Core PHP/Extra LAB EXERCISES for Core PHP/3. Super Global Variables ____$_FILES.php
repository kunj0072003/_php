<html>

<head>

	<title>UPLOD FILE </title>

</head>

<body>

	<H3>POST METHOD FORM</H3>
	<FORM action="" method="post" enctype="multipart/form-data"> 
		Select file to UPLOD
		
		<p>Name: <input type="text" name="username"/></p>
		
		<p>File: <input type="file" name="file"/></p>
		
		<button type="submit">Submit</button>
	
	</FORM>



<?php

if(isset($_FILES['submit']))
{
	echo $username=$_POST['username'] . "<br>";
	echo "<h3>Uploaded File Information</h3>";
    echo "File Name: " . $file['name'] . "<br>";
    echo "File Type: " . $file['type'] . "<br>";
	echo "Temp Location: " . $file['tmp_name'] . "<br>";

	
	if($_FILES['file']['size']>0)
	{
		echo $img=$$_FILES['file']['name'];
			$path='image/upload/' .$img;
			$dup_img=$_FILES['file']['tmp_name'];
			move_uploaded_file($dup_img,$path);
		
	}	
	
}





?>


</body>

</html>



