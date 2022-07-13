
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
            
		<form action="" method="post">
            
			<p align="center">Available Total Fund</p><br>
			<?php

					$db=mysqli_connect("localhost:3307",'root','root','salary')
					or die("Connection failed");
					$sqll="select fund from fund";
					$res=mysqli_query($db,$sqll);
					while($row=mysqli_fetch_array($res))
					{
						?>
						<input type="text" name="id" value="<?php echo $row['fund'];?>" >
						<?php
					}
			?>
			<p align="center">ADD Fund</p><br>
            <input type="text" name="fund" disabled>
			<input type="submit" name="submit" value="ADD"> 
				
        </form>
        
    </div>
</body>
</html>
			