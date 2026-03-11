<form method="post">
	Temperature: <input type = "text" name = "temp"><br>
	Convert to:
	<select name = "conversion">
		<option value = "celsius">Celsius°</option>
		<option value = "fahrenheit">Fahrenheit°</option>
	</select>
	<input  type = "submit" value = "Convert">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$temp = $_POST['temp'];
	$conversion = $_POST['conversion'];
	
	if (is_numeric($temp)) {
		$temp = (float)$temp;
		
		if ($conversion == "celsius") {
			$convertedTemp = ($temp * 9 / 5) + 32;
			echo "The given temperature is equivalent to: $convertedTemp" . "Fahrenheit";
		} elseif ($conversion == "fahrenheit") {
			$convertedTemp = ($temp - 32) * 5 / 9;
			echo "The given temperature is equivalent to: $convertedTemp" . "Celcius";
		}
	} else {
		echo "Unable to convert. Please input a valid numeric value.";
	}
}
?>