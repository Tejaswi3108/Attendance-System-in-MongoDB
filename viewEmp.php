<html>
<head>
<link rel="stylesheet" type="text/css" href="adminnavigation.css">
<link rel="stylesheet" type="text/css" href="ord.css">

</head>
<body>

		<div class="header">
			<ul class="nav">
				<li><a href="HR_Page.html">Home</a></li>
				<li><a href="addEmp.html" >Add Employee</a></li>
				<li><a href="#" style="color:#1c8adb;font-weight:bold;">View Employee</a></li>
				<li><a href="deleteEmployee.php">Remove Employee</a></li>
				<li><a href="logout.php">Logout</a></li>
				
			</ul>
		</div>
		<img src="g1.png" width="100%">
			<div class="display">
		<table class="table" cellspacing="2" border="1" align="center">
	<tr>
		<th colspan="7"><h2>Employee Details</h2></th>
		</tr>
	<tr>
		<th>Employee Name</th>
		<th>Email Id</th>
		<th>Mobile No</th>
		<th>Employee Id</th>
		<th>Password</th>	
		<th>Total Salary</th>		
	</tr>
	
	
	<?php
		require 'vendor/autoload.php';  
		$m = new MongoDB\Client('mongodb://localhost:27017');
		$db=$m->Salary;
		$collection=$db->employee;
		$cursor=$collection->find();
		foreach($cursor as $res)
		{
			
	?>
		<tr>
			<td><?php echo $res->Emp_Name;?></td>
			<td><?php echo $res->Email_id;?></td>
			<td><?php echo $res->Mobile_No;?></td>
			<td><?php echo $res->Emp_id;?></td>
			<td><?php echo $res->password;?></td>
			<td><?php echo $res->salary;?></td>
			
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>