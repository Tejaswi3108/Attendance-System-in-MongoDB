<?php global $ss;?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="adminnavigation.css">
<link rel="stylesheet" type="text/css" href="addEmp.css">

<link rel="stylesheet" type="text/css" href="addFaculty.css">
<link rel="stylesheet" type="text/css" href="loginPage.css">


</head>
<body>
	
		<div class="header">
			<ul class="nav">
				<li><a href="Accountant_Page
				.html">Home</a></li>
				<li><a href="Make.php" style=>Make Payment</a></li>
				<li><a href="#" style="color:#1c8adb;font-weight:bold;">Fund</a></li>
				<li><a href="logout.php">Logout</a></li>
				
			</ul>
		</div>
		<img src="loginphoto.jpg" width="100%">
		<div class="login-box">
		
			<img src="fund.jpg" class="avatar">
			<h1>Fund</h1><br><br>
            
		
            
			<p align="center">Available Fund</p><br>
			
			<?php
					
					require 'vendor/autoload.php';  
					$m = new MongoDB\Client('mongodb://localhost:27017');
					$db=$m->Salary;
					$collection=$db->fund;
					$ress=["_id"=>"1"];
					$cursor=$collection->find();
					session_start();
					foreach($cursor as $res)
					{
						?><input type="text" name="fundd" value="<?php echo $res->fund_value;?>" disabled>
						
					
						<?php
						
					
						
					}
			
					
					
			?>
			
			<form action=" " method="post">
			<p align="center">ADD Fund</p><br>
            <input type="text" name="fund" >
			<input type="submit" name="submit" value="ADD"> 
			</form>
			<?php
				if(isset($_POST['submit']))
	{			
				//$s=$u+$ss;
				
				//$m = new MongoDB\Client('mongodb://localhost:27017');
					$db=$m->Salary;
					$collection=$db->fund;
					
					$cursor=$collection->find();
					foreach($cursor as $res)
					{
						$final1=$res->fund_value;
					
					}
				     $final2=$final1+$_POST["fund"];
					$user=$user = array (
						'fund_value' =>$final2);
				
					$id=1;
					$r=$collection->updateOne(
						array('fid' => $id),
						array('$set' => $user)
					);
					
					
					function function_alert($message) { 
					echo "<script>alert('$message');</script>"; } 
					function_alert("Fund Added"); 
						header("location: fund.php");
					
				
	}
		?>
				
			
        
        
</div>
</body>
</html>
			