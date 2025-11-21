<html>

<head>

	<title>GET FORMS</title>

</head>

<body>

	<H3>GET METHOD FORM</H3>
	<FORM action="" method="get">
		
		Name:<input type="text" name="name">
		<button type="submit">Submit with GET</button>
	
	</FORM>



<?php


echo "<h3> data received using \$_GET </h3>";
echo "Name: " . $_GET['name'] . "<br>";
echo "<p><bold>Check the URL: </bold> Notice how the data appears in the URL  query string. </p>"


?>


</body>

</html>



