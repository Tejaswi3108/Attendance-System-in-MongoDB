<?php
		session_start();
		require 'vendor/autoload.php';  
		$m = new MongoDB\Client('mongodb://localhost:27017');
		
	
		$u=$_POST["username"];
		$p=$_POST["password"];
		$select=$_POST["type"];
	
		$_SESSION['user']=$u;
		$_SESSION['pass']=$p;
	
	if($select=="hr")	
	{
		$db=$m->Salary;
		$collection=$db->hr;
		$res=array("name"=>$_POST["username"],"pass"=>md5($_POST["password"]));
		$rr=$collection->find($res);
	
		if($rr)
		{
			
		header("location:HR_page.html");
		}
 
		else
		{
			header("location: loginPage.html");
		}
	}
	
	elseif($select=="accountant") 
	{
		$db=$m->Salary;
		$collection=$db->accountant;
		$res=array("user"=>$u,"pass"=>$p);
		$rs=$collection->find($res);
		
		if($rs)
		{
		header("location: Accountant_Page.html");
		}
 
		else
		{
			
			header("location: loginPage.html");
		}
	}
	
	
	else
	{
		$db=$m->Salary;
		$collection=$db->employee;
		$res=array("Emp_id"=>$u,"password"=>$p);
		$rs=$collection->findOne($res);
		if($rs)
		{
		header("location: Employee.php");
		}
 
		else
		{
			$message = "Username and/or Password incorrect.\\nTry again.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			//header("location: loginPage.html");
		}
		
	}
	
?>