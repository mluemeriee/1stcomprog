<form method="post">
	Number 1: <input type="text" name="num1"><br>
	Number 2: <input type="text" name="num2"><br>
	Operation:
	<select name ="operator">
		<option value="add">Add</option>
		<option value="subtraction">Subtract</option>
		<option value="multiply">Multiply</option>
		<option value="divide">Divide</option>
	</select>
	<input type="submit" value="Calculate">
</form>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$num1 = $_POST[ 'num1'];
	$num2 = $_POST[ 'num2'];
	$operator = $_POST[ 'operator'];
	
	switch ($operator) {
		case 'add':
			$result = $num1 + $num2;
			break;
		case 'subtract':
			$result = $num1 - $num2;
			break;	
		case 'multiply' :
			$result = $num1 * $num2;
			break;
		case 'divide' :
			if ($num2 !=0) {
				$result = $num1 / $num2;
			} else { 
				 $result = "Cannot divide by zero!";
			}
			break;
		default:
			$result = "Invalid operation selected!";
	}
	echo "Result: $result";
}
?>