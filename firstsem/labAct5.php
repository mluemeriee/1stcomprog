<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP Formula Computation Example</title>
</head>
<body>

	<h1>PHP Formula Computation</h1>
	
		<?php
		
		$radius = 7;			
		$pi = 3.14159;			
		
		
		$area = $pi * $radius;  
		$circumference = 2 * $pi * $radius;	
		
		
		echo "<h2>Circle Computations</h2>";
		echo "<p>Radius: $radius meters</p>";								
		echo "<p>Area of the circle: $area square meters</p>";				
		echo "<p>Circumference of the circle: $circumference meters</p>";	
	?>
	
</body>
</html>