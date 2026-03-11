<form method="post">
	Number 1: <input type="number" name="num1"><br>
	Number 2: <input type="number" name="num2"><br>
	Number 3: <input type="number" name="num3"><br>
	<input type="submit" value="Identify the largest number">
</form>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$num1 = $_POST[ 'num1'];
	$num2 = $_POST[ 'num2'];
	$num3 = $_POST[ 'num3'];
	
	if ($num1 > $num2 && $num1 > $num3) {
		echo"$num1 is the largest number";
	} elseif ($num2 > $num3 && $num2 >= $num1) {
		echo"$num2 is the largest number";
	} elseif ($num3 > $num1 && $num3 >= $num2) {
		echo"$num3 is the largest number";
	} else if ( $num1 == $num2 && $num1 == $num3 && $num2 == $num3) {
		echo "All numbers are the same";
	}
	else {
		echo "Please input valid number";
	}
}
?>