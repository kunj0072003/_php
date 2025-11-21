

<?php

$products=array
( 
	array("name"=>"LEPTOP","price"=>65000,"stock"=>56),
	array("name"=>"PHONE","price"=>12000,"stock"=>76),
	array("name"=>"TABLET","price"=>79789,"stock"=>88)
);

echo "<h3> PRODUCT INFORMATION </h3>";
echo "<table border='1' cellpadding='8'>
	<tr><th>Name</th>
		<th>Price</th>
		<th>Stock</th></tr>";


foreach($products as $product)
{
	echo "<tr>
			<td>{$product['name']}</td>
			<td>{$product['price']}</td>
			<td>{$product['stock']}</td>
		</tr>";
}

echo "</table>";

?>