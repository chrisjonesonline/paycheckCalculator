<?php
error_reporting(E_ERROR|E_PARSE); //todo: add exception handler for null inputs, etc.

if(isset($_POST['submit'])) {
	$salary = ($_POST['salary']);
	$hours = ($_POST['hours']);
	
	if ($hours > 40) {
		$paycheck = (($salary * $hours) * 1.5);
		$overtime = ((($hours - 40) * $salary) * 1.5);
	} else { $paycheck = $salary * $hours; }
		echo 'Gross Total: ' . '$' . $paycheck . "<br />";
		echo 'Overtime: ' . '$' . $overtime;
} return 0;
?>