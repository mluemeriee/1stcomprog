<?php

	$base = 8;
	$height = 14;
	
	$area = 0.5 * $base * $height;
	$hypotenuse = sqrt(pow($base, 2) + pow($height, 2));
	$perimeter =$base + $height + $hypotenuse;

		echo "<h2> Triangle (right triangle) </h2>";
		echo "Base: " . $base . "<br>";
		echo "Height: " . $height . "<br>";
		echo "Area: " . $area . "<br>";
		echo "Hypotenuse: " . $hypotenuse . "<br>";
		echo "Perimeter: " . $perimeter . "<br>";
		
?>