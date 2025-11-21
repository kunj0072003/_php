<html>
<head>
  <title>Download PDF</title>
</head>
<body>

  
  <form method="post" >
    <input type="submit" name="submit" value="Click Here To Download">
  </form>

</body>
</html>

<?php
if(isset($_POST['submit']))
{
	header('Content-type:application/octect-stream'); 
	header('Content-Disposition:attachment;filename="php_assignment_1731399600.pdf"'); 
	readfile('php_assignment_1731399600.pdf'); 
}

 
?>