<?php

	$ename=$_POST['ename'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
	$salary=$_POST['sal'];
	$Emp_id=$_POST['id'];
	$password=$_POST['pass'];
		
		require 'vendor/autoload.php';  
		$m = new MongoDB\Client('mongodb://localhost:27017');
		$db=$m->Salary;
		$collection=$db->employee;
		$res = $collection->insertOne([
				 'Emp_Name'=>$ename,
				 'Email_id'=>$email,
				 'Mobile_No'=>$mob,
				 'salary'=>$salary,
			     'Emp_id'=>$Emp_id,
			     'password'=>$password]);
		  
		 
	if($res)
	{
	function function_alert($message) { 
					echo "<script>alert('$message');</script>"; } 
					function_alert("Employee Registrered"); 
						header("location: viewEmp.php");

	}
	else
	{
	header("location: addEmp.html");
	}

?>