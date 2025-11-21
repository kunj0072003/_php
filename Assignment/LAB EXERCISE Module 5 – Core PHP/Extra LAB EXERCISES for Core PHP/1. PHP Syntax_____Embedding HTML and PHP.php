<?php


$users=[
	["name" => "Kunj", "email" => "kunj123@gmail.com"],
	["name" => "Arun", "email" => "arun234@gmail.com"],
	["name" => "Sonali", "email" => "sonali567@gmail.com"]
];

?>
<html>

<head>

	<title> USER TABLE</title>

</head>

<body>
	<h2> USER INFORMATION </h2>
	<table border='1' cellpadding='10'>
		<tr>
			<th> Name </th>
			<th> Email </th>
		</tr>	
<?php foreach ($users as $user):?>
		<tr>
		
			<td> <?php echo $user ["name"]; ?> </td>
			<td> <?php echo $user ["email"]; ?> </td>		
		
		</tr>
		
<?php endforeach;?>		

	</table>


</body>

</html>
