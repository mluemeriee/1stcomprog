<form method="post">
	Enter a number: <input type="text" name="num"><br>
	<input type="submit" value="Check">
</form>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$num = $_POST[ 'num'];
	if ($num % 2 == 0) {
		echo "$num is Even";
	} else {
		echo "$num is Odd";
	}
}
?>