<h2>Fibonacci Series</h2>
<form method = "post">
    Enter a number: <input type = "number" name = "num"><br>
	<input type = "submit" value = "Generate Series">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$num = $_POST['num'];
	if ($num % 2==0) {
	echo "even"; } 
	else {
	echo "odd"; }
	
}
?>