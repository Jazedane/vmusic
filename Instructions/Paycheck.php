<!DOCTYPE html>
<html>
<head>
<title>Paycheck Results</title>
<meta http-equiv="Content-Type"
	content="text/html; charset=iso-8859-1" />
</head>
<body>
<h2>Paycheck Calculations</h2>
<?php
$fname = $_POST["fname"];
	echo "<br>Employee Name: $fname</br>";
$hours = $_POST["hours"];
	$x = $hours;
		echo "<br>Hours Worked: $x</br>";
$wages = $_POST["wages"];
	$y = $wages;
		echo "<br>Hourly Wages: $y</br>";

if ($x > 1);{
	$z = $x * $y;
        echo "<br>Weekly Gross Salary: $z</br>";
}
?>
</body>
</html>
