<html lang="en">
<head>

<?php
	session_start();
	if(!isset($_SESSION['userdata'])){
		header("location: ../partials");
	}

	$userdata = $_SESSION['userdata'];
?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 
	<link rel="stylesheet" href="admin.css">
</head>
<body>
	
	<nav class="navbar" style="background-color: #e3f2fd;" "fixed-top">
	 <div class="container-fluid">
	<ul class="nav nav-pills nav-fill">

	</ul>
	
	<div class="btn-group dropstart">
			<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"></button>
		<ul class="dropdown-menu">
        <li><button class="dropdown-item" type="button" ><?php echo $userdata['fname'].' '.$userdata['lname']; ?></button></li>

			<li><button class="dropdown-item" type="button"><a href="../partials/index.php">Sign-out</button></a></li>
		</ul>
	</div>
	</div>
	</nav>
	

		
	<div class="h1 text-primary border-bottom border-primary">ADD ADMIN</div>
	<div class="container-fluid">	
	<form action="../api/admin_add.php" method="POST">

		<table class="table table-striped table-primary">
		
            <tr>
			<th>
			<div class="form-group has-feedback">
				<label class="form-label">FIRST NAME</label>
				<input class="form-control" type="text" name="fname" id="fname">
			</div>
			</th>
			</tr>

            <tr>
			<th>
			<div class="form-group has-feedback">
				<label class="form-label">LAST NAME</label>
				<input class="form-control" type="text" name="lname" id="lname">
			</div>
			</th>
			</tr>

			<tr>
			<th>
			<div class="form-group has-feedback">
				<label class="form-label">USERNAME</label>
				<input class="form-control" type="text" name="username" id="username">
			</div>
			</th>
			</tr>

			<tr>
			<th>
			<div class="form-group has-feedback">
				<label class="form-label">PASSWORD</label>
				<input class="form-control" type="text" name="password" id="password">
			</div>
			</th>
			</tr>

		
		</table>

		<div class="text-center">
			<button class="btn btn-primary button" type="submit">Add</button>
			
		</div>

	</form>
	</div>
	</div>
	</div>
		
	
	<footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
		<div class="container-fluid"></div>
		<div class="text-center p-3" style="background-color: #000000;">© 2022 Copyright: RDBHAF</div>
   </footer>
	
 
</body>
</html>