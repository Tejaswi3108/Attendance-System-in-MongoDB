<html>
<head>
<link rel="stylesheet" type="text/css" href="adminnavigation.css">
<link rel="stylesheet" type="text/css" href="addFaculty.css">
<link rel="stylesheet" type="text/css" href="loginPage.css">
<style>
	
	</style>
</head>
<body>
	
		<div class="header">
			<ul class="nav">
				<li><a href="HR_Page.html">Home</a></li>
				<li><a href="addEmp.html">Add Employee</a></li>
				<li><a href="viewEmp.php">View Employee</a></li>
				<li><a href="#" style="color:#1c8adb;font-weight:bold;">Remove Employee</a></li>
				<li><a href="logout.php">Logout</a></li>
				
			</ul>
		</div>
		<img src="loginphoto.jpg" width="100%">
		<div class="login-box">
		
			<img src="avatar.png" class="avatar">
			<h1>Remove Employee</h1><br><br>
            
		<form action=" " method="post">
            
			<p>Enter Employee ID</p><br><br>
            <input type="text" name="username"  required>
			<input type="submit" name="submit" value="Remove"> 
				
        </form>
        
    </div>
<?php
	if(isset($_POST['submit']))
	{
		$n=$_POST['username'];
		echo"$n";
		require 'vendor/autoload.php';  
		$m = new MongoDB\Client('mongodb://localhost:27017');
		$db=$m->Salary;
		$collection=$db->employee;
		$res=$collection->deleteOne(array("Emp_id" =>$n));
		$co=$db->salaryTable;
		$re=$collection->deleteOne(array("Emp_id" =>$n));
		if($res)
		{
			header("location: viewEmp.php");
		}
		else
		{
			
			header("location: deleteEmployee.php");
					
		}
	}
?>
</body>
</html>