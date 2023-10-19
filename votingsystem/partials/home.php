<!Doctype html>

<?php
	session_start();
	if(!isset($_SESSION['userdata'])){
		header("location: ../partials");
	}

	$userdata = $_SESSION['userdata'];
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HFDB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 
	<link rel="stylesheet" href="home.css">
	
 </head>
  <body>

	<nav class="navbar navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand header" >Voter's Page </a>
	<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
     <span class="navbar-toggler-icon"></span>
    </button>
	
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">STUDENT'S PROFILE</h5>
		
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
	
     <div class="offcanvas-body">
       <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="#"><?php echo $userdata['firstname'].' '.$userdata['lastname']; ?></a>
         </li>
		 </br></br>
     <a href="logout.php" class="btn btn-outline-primary btn-sm">Sign-out</a> 
         
       
      </div>
    </div>
  </div>
</nav>

	<div class="container">
	<h1 class="h1">Select Position</h1>
		<div class="btn-group">
		<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
		President & Vice President</button>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="votingpage2.html">President & Vice President</a></li>
				<li><a class="dropdown-item" href="votingpage2_1.html">Position 2</a></li>
				<li><a class="dropdown-item" href="#">POSITION 1</a></li>
				</ul>
		</div>
		
		<div class="container">	
			<div class="border border border-dark p-2 mb-2">
				<div class="text text-primary border-bottom border-primary">President</div>
				<div class="form-check border2">
					<input class="form-check-input" type="radio" name="radiobutton1" id="radio1">
					<label class="form-check-label" for="radio1">Option 1</label>
				</div>
				<div class="form-check">
			<input class="form-check-input" type="radio" name="radiobutton1" id="radio2">
			<label class="form-check-label" for="radio2">Option 2</label>
				</div>
			</div>
		</div>

		

			</br>
		</div>
		<form method="POST" id="ballotForm" action="submit_ballot.php">
		<div class="text-center">
		<button type="submit" class="btn btn-primary btn-flat" name="vote"><i class="fa fa-check-square-o"></i> Submit</button>
		</div>
		</form>
	</div>
	
	</br></br></br></br></br>
	<footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
		<div class="container-fluid"></div>
		<div class="text-center p-3" style="background-color: #000000;">© 2022 Copyright: RDBHAF</div>
   </footer>

	
</script>
</body>
</html>
	