<form method="post">
	Temperature: <input type = "text" name = "temp"><br>
	Convert to:
	<select name = "conversion">
		<option value = "celsius">Celsius</option>
		<option value = "fahrenheit">Fahrenheit</option>
	</select>
	<input  type = "submit" value = "Convert">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$temp = $_POST['temp'];
	$converter = $_POST['conversion'];
	
	switch ($converter) {
		case 'celsius':
		    if (is_numeric(value: $temp)) {
				if ($temp >= 0) {
					$result = ($temp - 32) * 5 / 9;
					echo "$temp" . "°Fahrenheit is equivalent to:  $result" . "°Celsius.";
				}
				else {
					echo "Cannot convert invalid number.";
				}
			}
			break;
			case 'fahrenheit':
			    if (is_numeric(value: $temp)) {
					if ($temp >= 0) {
						$result = ($temp * 9 /5) + 32;
						echo "$temp" . "°Celsius is equivalent to:  $result" . "°Fahrenheit.";
				}
				else {
					echo "Cannot convert invalid number.";
				}
			break;
				}
		}
	}
?>