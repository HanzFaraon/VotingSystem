<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HFDB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 
	<link rel="stylesheet" href="login.css">

 </head>
  <body>
	

		<div class="login">	
			
			<h1 class="text-center"><img src="https://lh3.googleusercontent.com/pw/ADCreHcQBDcttH5D8X7R81eonRmR0BRPT3MxIw6KN73vS-SHlvuAft5vdpg09S63BORO_7Ltz__5dDPwV43ckEM4rREXkWkpyuAzj7_eIDZcumE0NGwa2vA=w2400"></h1>
			<div class="dropdown-center centerdrop">
 	 			<button class="bn632-hover bn26" class="btn btn-primary dropdown-toggle"  type="button" data-bs-toggle="dropdown">STUDENT ▼</button>
  					<ul  class="dropdown-menu">
   					 <li><a class="dropdown-item" href="index.php">STUDENT</a></li>
    				<li><a class="dropdown-item" href="adminlogin.php">ADMIN</a></li>
    
 					 </ul>
			</div>
</br>
			<form action="../api/login.php" method="POST">
				<div class="form-floating mb-3">
					<input class="form-control" type="text" name="votersid" placeholder="Username" required>
					<label for="floatingInput">Username</label>
				</div>
		
				<div class="form-floating mb-3">
					<input class="form-control" id="floatingInput" type="password" name="password" placeholder="Password" required>
					<label for="floatingInput">Password</label>
				</div>
				<div class="row">
					<div class="center">
				<input type="submit" class="bn632-hover bn26" value="SIGN IN">
				
				</div>
			</form>

		</div>
		<div>
			<form></br>
				<center><p>New here? <a class="bn48" href="registration.php">Register now</a></p>
				<p>Username is your Student ID No.</p></center>
			</form>
		</div>

		<?php include '../includes/scripts.php' ?>
	</body>
</html>