<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP Variables Example</title>
</head>
<body>

	<h1>PHP Variable Declaration and Manipulation</h1>
	
	<?php
	
		$productName= "laptop";				
		$price = 1200;						
		$quantity = 2;						
		$discount = 0.1;					
		
		
		$totalPrice = $price * $quantity;	
		$discountAmount = $totalPrice * $discount;
		$finalPrice = $totalPrice - $discountAmount; 
		
		
		echo "<p>Product Name: $productName</p>";
		echo "<p>Price per Item: $$price</p>";	  
		echo "<p>Quantity: $quantity</p>";	
		echo "<p>Total Price: $$totalPrice</p>"; 
		echo "<p>Discount: ". ($discount * 100) . "%</p>";  
		echo "<p>Final Price after Discount: $$finalPrice</p>"; 
	?>
	
</body>
</html>