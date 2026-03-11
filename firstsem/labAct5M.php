<h1>Generate Multiplication Table</h1>
<form method="post">
	Enter a number of rows:<input type="number" name="rows"><br>
	Enter a number of columns:<input type="number" name="cols"><br>
	<input type="submit" value="Generate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$rows = $_POST['rows'];
	$cols = $_POST['cols'];

	echo "<h2>Columns: $cols &nbsp&nbsp&nbspRows:$rows </h2>";
	echo "<table border='3'>";
	
	$i = 1;
	while ($i <= $rows) {
		echo "<tr>";
		$j = 1;
		while ($j <= $cols) {
			echo "<td> " . ($i * $j) . "</td>";
			$j++;
	}
	echo "</tr>";
	$i++;
}
	echo "</table>";
}
?>