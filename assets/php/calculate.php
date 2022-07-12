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