
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dynamic Content with image</title>
	<link rel="stylesheet" href="3. Dynamic Content Generation i.css">
</head>
	
	<body>
	
		<h1 style= "text-align:center; color:white;">PRODUCT_LIST</h1>
		<ul class="product-list">
<?php


 $products = [
            [
                "name" => "Headphones",
                "price" => "RS.1,999",
                "image" => "image/headphone.jpg"
            ],
            [
                "name" => "Smart Watch",
                "price" => "RS.5,599",
                "image" => "image/smartwatch.jpg"
            ],
            [
                "name" => "Smartphone",
                "price" => "RS.25,056",
                "image" => "image/smartphone.png"
            ],
			[
                "name" => "Camera",
                "price" => "RS.1,50,000",
                "image" => "image/camera.jpg"
            ],
			[
                "name" => "Laptop",
                "price" => "RS.2,40,000",
                "image" => "image/laptop.png"
            ]
        ];
		
		
		
		foreach($products as $product){
			echo "<li class='product-item'>";
			echo "<img src='" .htmlspecialchars($product['image']). "' alt='Product image'>";
			echo "<h3>" .htmlspecialchars($product['name']) . "</h3>";
			echo "<p class='price'>" . htmlspecialchars($product['price']) . "</p>";
			echo "</li>";
        }
		
?>

		</ul>

</body>
</html>
