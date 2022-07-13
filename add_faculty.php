<?php
$db=mysqli_connect("localhost:3307",'root','root','salary')
		or die("Connection failed");

		
		$s=$_POST['sub'];
	 
	$sql="INSERT INTO employee_details
		  set
		  Emp_Name='".$_POST['ename']."',
		  Email_id='".$_POST['email']."',
		  Mobile No='".$_POST['mob']."',
		  Emp_id='".$_POST['id']."',
		  password='".$_POST['pass']."';
		  salary='".$_POST['sal']."' ";
		  
	
	$res=mysqli_query($db,$sql);
	if($res)
	{
	header("location: index.html");
	}
	else
	{
	header("location: addFaculty.html");
	}

?>