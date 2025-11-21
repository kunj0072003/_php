<html>

<head>

	<title>POST FORMS</title>

</head>

<body>

	<H3>POST METHOD FORM</H3>
	<FORM action="" method="post">
		
		Name:<input type="text" name="name">
		<button type="submit">Submit with POST</button>
	
	</FORM>



<?php


echo "<h3> data received using \$_POST </h3>";
echo "Name: " . $_POST['name'] . "<br>";
echo "<p><bold>Check the URL: </bold> Notice how the data appears in the URL  query string. </p>"


?>


</body>

</html>



