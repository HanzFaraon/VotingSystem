<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 
	<link rel="stylesheet" href="login.css">

 </head>
  <body>
	

		<div class="login" >	
			
			<h1 class="text-center">ADMIN</h1>
			<div class="dropdown-center centerdrop">
 	 			<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">ADMIN</button>
  					<ul class="dropdown-menu">
   					 <li><a class="dropdown-item" href="index.php">STUDENT</a></li>
    				<li><a class="dropdown-item" href="adminlogin.php">ADMIN</a></li>
    
 					 </ul>
			</div>
</br>
			<form action="../api/admin.php" method="POST">
				<div class="form-group has-feedback">
					<label class="form-label" for="email">Username</label>
					<input class="form-control" type="text" name="username" required>
				</div>
				
				<div class="form-group has-feedback">
					<label class="form-label" for="password">Password</label>
					<input class="form-control" type="password" name="password" required>
				</div>
				<div class="row">
					<div class="col-xs-12">
				<input type="submit" class="btn btn-primary w-100" value="SIGN IN">
				</div>
			</form>

</div>

		<?php include '../includes/scripts.php' ?>
	</body>
</html>