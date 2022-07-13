<html>
<head>
<link rel="stylesheet" type="text/css" href="adminnavigation.css">
<link rel="stylesheet" type="text/css" href="ord.css">
<link rel="stylesheet" type="text/css" href="addFaculty.css">
<link rel="stylesheet" type="text/css" href="loginPage.css">
<style>
	body{
		background-color: ;

	}
</style>
</head>
<body>

		<div class="header">
			<ul class="nav">
				<li><a href="Employee.php">Home</a></li>
			
				<li><a href="#" style="color:#1c8adb;font-weight:bold;">Payment Status</a></li>
			
				<li><a href="logout.php">Logout</a></li>
				
			</ul>
		</div>
		<img src="g1.png" width="100%">
			<img src="loginphoto.jpg" width="100%">
		<div class="login-box">
		
			<img src="status.jpg" class="avatar">
			<h1>Payment Status</h1><br><br>
            
		<form action="pay1.php" method="post">
            
			<p>Select Date </p><br><br>
            <input type="date" name="date"  required>
			<input type="submit" name="submit" value="Proceed"> 
				
        </form>
</body>
</html>