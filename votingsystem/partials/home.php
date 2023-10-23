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
  <link rel="stylesheet" href="image.css">
	
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
	
		<br/>
		<br/>
		<br/>
	
		<div class="container">	
			<div class="border border border-dark p-2 mb-2">
				<div class="text text-primary border-bottom border-primary">President</div>
        <div class="form-check border2">
        <input class="radio-input" type="radio" name="test" value="yes" />
        <label class="radio-label"><img src="https://png.pngtree.com/png-vector/20220807/ourmid/pngtree-man-avatar-wearing-gray-suit-png-image_6102786.png" class="img-thumbnail" alt="...">option name</label>
        </div>
        <div class="form-check border2">
        <input class="radio-input" type="radio" name="test" value="yes" />
        <label class="radio-label"><img src="https://png.pngtree.com/png-vector/20220807/ourmid/pngtree-man-avatar-wearing-gray-suit-png-image_6102786.png" class="img-thumbnail" alt="...">option name</label>
        </div>
        <div class="form-check border2">
        <input class="radio-input" type="radio" name="test" value="yes" />
        <label class="radio-label"><img src="https://png.pngtree.com/png-vector/20220807/ourmid/pngtree-man-avatar-wearing-gray-suit-png-image_6102786.png" class="img-thumbnail" alt="...">option name</label>
        </div>
			</div>
		</div>

		

			</br>
		</div>
		<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="home.php">1</a></li>
    <li class="page-item"><a class="page-link" href="home2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="home3.php">3</a></li>
    <li class="page-item">
      <a class="page-link" href="home3.php" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

		</div>
	
	</br></br></br></br></br>
	<footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
		<div class="container-fluid"></div>
		<div class="text-center p-3" style="background-color: #000000;">© 2022 Copyright: RDBHAF</div>
   </footer>

	
</script>
</body>
</html>
	