<h2>Fibonacci Series</h2>
<form method = "post">
    Enter a number: <input type = "number" name = "num"><br>
	<input type = "submit" value = "Generate Series">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$num = $_POST['num'];
	$a = 0;
	$b = 1;
	do {
		echo $a . " $num is Odd ";
		$num1 = $a;
		$a = $b;
		$b = $num1 + $a;
	}
	while ($b > 0 && $a <= $num);
		echo $b . " $num is Even ";
}
?>
