<?php
global $ss;
	require 'vendor/autoload.php';  
		$m = new MongoDB\Client('mongodb://localhost:27017');
		$db=$m->Salary;
		$collection=$db->salaryTable;
		  $datee=$_POST['date'];
		  $bs=$_POST['bs'];
		  $pa=$_POST['pa'];
		  $pf=$_POST['pf'];
		  $grat=$_POST['grat'];
		  $pp=$_POST['pp'];
		  $ts=$_POST['ts'];
		  $status=$_POST['status'];
		// $yes = new \MongoDB\BSON\UTCDateTime($datee);;
		session_start();
		//$datee = explode('-', $datee);
		$month = $orderdate[0];
		$day   = $orderdate[1];
		$year  = $orderdate[2];
		$u=$_SESSION['id'];
		
		$res = $collection->insertOne([
		  'datee'=> $datee,
		  'bs'=>$bs,
		  'pa'=>$pa,
		  'pf'=>$pf,
		  'grat'=>$grat,
		  'pp'=>$pp,
		  'ts'=>$ts,
		  'status'=>$status,
		  'empid'=>$u	]);
		
		  
	
	
	
	if($res)
	{
					$v=$_POST['ts'];
					require 'vendor/autoload.php';  
					$m = new MongoDB\Client('mongodb://localhost:27017');
					$db=$m->Salary;
					$collection=$db->fund;
					$cursor=$collection->find();
					foreach($cursor as $res)
					{
						$final1=$res->fund_value;
					
					}
				    
				
					
					$n=$final1-$v;
					$user=$user = array (
						'fund_value' => $n);
				
					$id=1;
					$r=$collection->updateOne(
						array('fid' => $id),
						array('$set' => $user)
					);
					
					
					function function_alert($message) { 
					echo "<script>alert('$message');</script>"; } 
					function_alert("Successfully Done"); 
					header("location: Accountant_Page.html");



	}
	else
	{
	header("location: Make_Payment.html");
	}

?>