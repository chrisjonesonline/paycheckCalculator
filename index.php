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
	<p><?php include('assets/php/controllers/calculate.php'); ?></p>
</body>
</html>