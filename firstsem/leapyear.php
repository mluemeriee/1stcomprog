<h2>Leap Year Checker</h2>
<form method = "post">
    Enter a number: <input type = "number" name = "num"><br>
	<input type = "submit" value = "Generate">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$num = $_POST['num'];
if (($num %4==0 && $num %100 !==0) || ($num%400==0)) {
echo "$num is a Leap Year" ; }
else {
echo "$num is not a Leap Year"; 
}
}
?>