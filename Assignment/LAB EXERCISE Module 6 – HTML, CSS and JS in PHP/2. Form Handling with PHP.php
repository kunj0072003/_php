<!DOCTYPE html>
<html leng="eng">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Form</title>
<head>
<body>

	<h1>Contact US</h2>
	<Form ACTION="process.php" method="post">
		<p>Name: <input type="text" name="name" required></p>
		<p>Email: <input type="email" name="email" required></p>
		<p>Massage: <textarea name="massage" required></textarea></p>
		<p><input type="submit" name="submit" value="send"></p>
	</Form>
</body>

</html>


<?php

if(isset($_POST['submit'])){
	$name=trim($_REQUEST['name']);
	$email=trim($_REQUEST['email']);
	$massage=($_REQUEST['massage']);
	
	if(empty($name) || empty($email) || empty($massage)){
		echo "All fields are required!";
	}
	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo"INVALID EMAIL FORMATE !!";
	}
	else{
		echo "<h3>Thank you for reaching out</h3>";
		echo "<p><b>Name:</b>" . htmlspecialchars($name) . "</p>";
		echo "<p><b>Email:</b>" . htmlspecialchars($email) . "</p>";
		echo "<p><b>Massage:</b>" . htmlspecialchars($massage) . "</p>";
	}
}



?>