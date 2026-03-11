<form method="post">
	Number 1: <input type="text" name="num1"><br>
	Number 2: <input type="text" name="num2"><br>
	<input type="submit" value="Calculate Sum">
</form>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$num1 = $_POST[ 'num1'];
	$num2 = $_POST[ 'num2'];
	$sum = $num1 + $num2;
	echo "The sum of $num1 and $num2 is $sum";
}
?>