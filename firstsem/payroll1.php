<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Payroll</title>
</head>
<body>

<h1>Employee Payroll Summary</h1>

<?php

$employeeName = "mlue";
$hoursWorked = 40; 
$hourlyWage = 25.00;
$taxPercentage = 0.15; 


$grossPay = $hoursWorked * $hourlyWage;
$taxes = $grossPay * $taxPercentage; 
$netPay = $grossPay - $taxes; 


echo "<p><strong>Employee Name:</strong> $employeeName</p>";
echo "<p><strong>Hours Worked:</strong> $hoursWorked hours</p>";
echo "<p><strong>Hourly Wage:</strong> ₱$hourlyWage per hour</p>";
echo "<p><strong>Gross Pay:</strong> ₱$grossPay</p>";
echo "<p><strong>Tax Percentage:</strong> " . ($taxPercentage * 100) . "%</p>";
echo "<p><strong>Taxes Deducted:</strong> ₱$taxes</p>";
echo "<p><strong>Net Pay:</strong> ₱$netPay</p>";
?>

</body>

</html>
