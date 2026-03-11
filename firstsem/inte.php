<h2>Leap Year</h2>
<form method = "post">
    Enter a number: <input type = "number" name = "Principal"><br>
	Enter a number: <input type = "number" name = "num2"><br>
	Enter a number: <input type = "number" name = "num3"><br>
	<input type = "submit" value = "Generate">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$num3 = $_POST['num3'];
	if ($num1 >0&& $num2 >0&& $num3 >0){
	$si= ($num1* $num2 * $num3)/100;
	echo $si; }
	else
	echo "invalid";
	}
?>