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
		<li class="nav-item">
			<a class="nav-link active" href="votes.php">Votes</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" aria-current="page" href="dashboard.php">Voters</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="candidates.php">Candidates</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" aria-current="page" href="addcandidates.php">Add Candidates</a>
		</li>	
	</ul>
	
	<div class="btn-group dropstart">
			<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"></button>
			<ul class="dropdown-menu">
			<li><button class="dropdown-item" type="button" ><?php echo $userdata['fname'].' '.$userdata['lname']; ?></button></li>
			<li><button class="dropdown-item" type="button"> <a href="addadmin.php">Add Admin</button></a></li>
			<li><button class="dropdown-item" type="button"><a href="../partials/index.php">Sign-out</button></a></li>
		</ul>
	</div>
	</div>
	</nav>
	
		<div class="h1 text-primary border-bottom border-primary">VOTES</div>
		<div class="container-fluid">	
			
		<table class="table table-striped table-primary">
		 <thead>
			<tr>
				<th scope="col">Voters Name</th>
				<th scope="col">Candidates Name</th>
			</tr>
		</thead>
	
		</table>
	
	<footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
		<div class="container-fluid"></div>
		<div class="text-center p-3" style="background-color: #000000;">© 2022 Copyright: RDBHAF</div>
   </footer>
	
	
</body>
</html>