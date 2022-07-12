<!DOCTYPE html>
<html>
<head>
<title>paycheckCalculator</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<h1>Weekly Paycheck Calculator</h1><hr />
	<form class="form" method="POST">
		<p>Please Enter Salary:
			<input type="int" name="salary" autocomplete="off" autofocus="autofocus" onfocus="this.select();"></input>
		</p>
		<p>Please Enter Hours:
			<input type="int" name="hours" autocomplete="off"></input>
		</p>
		<input type="submit" name="submit" value="Submit"></input>
	</form>
<?php
  //disable error reporting
  error_reporting(E_ERROR|E_PARSE);
  
  if(isset($_POST['submit'])) {
  	$salary = ($_POST['salary']);
  	$hours = ($_POST['hours']);
  	  if ($hours <= 40) {
        $paycheck = $salary * $hours;
        $overtime = 0;
  	  }
      else {
        $paycheck = $salary * 40;
  		  $overtime = ((($hours - 40) * $salary) * 1.5);
      }
      $total = $paycheck + $overtime;
  	echo '<br />' . 'Salary: ' . '$' . $paycheck;
  	echo '<br />' . 'Overtime: ' . '$' . $overtime;
    echo '<br />' . 'Total: ' . '$' . $total;
  }
?>
</body>
</html>
