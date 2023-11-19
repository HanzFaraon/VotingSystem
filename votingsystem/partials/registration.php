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
			
<center><img  src="https://lh3.googleusercontent.com/pw/ADCreHfnNz1NKzZNOqRNx08ORN5BIFHQId9DWLS1CLfYHx7sneBH6lXsW6d3GlhMeDY6KQNyHV2Tp2KoeE1DqO0BIKThPKNmKTZgoAi1rTHIMXNfKe6Nx1s=w2400"></center>
			<br><br>
		
			<form action="../api/register.php" method="POST">

				<div class="form-floating mb-3">
					<input class="form-control" type="text" name="firstname" placeholder="firstname" required>
					<label for="floatingInput">First Name</label>
				</div>

				<div class="form-floating mb-3">
					<input class="form-control" type="text" name="lastname" placeholder="lastname" required>
					<label for="floatingInput">Last Name</label>
				</div>

				<div class="form-floating mb-3">
					<input class="form-control" type="text" name="votersid" placeholder="votersid" required>
					<label for="floatingInput">Voter's ID</label>
				</div>

				<div class="form-floating mb-3">
					<input class="form-control" type="text" name="password" placeholder="password" required>
					<label for="floatingInput">Password</label>
				</div>

				<div class="form-floating mb-3">
					<input class="form-control" type="text" name="cpassword" placeholder="cpassword" required>
					<label for="floatingInput">Confirm Password</label>
				</div>

				<div class="row">
					<div class="center">
				<input type="submit" class="bn632-hover bn26" value="SIGN IN">
				</div>
			</form>

		</div>
		<div>
			<form></br>
				<center><p>Already have an account? <a class="bn48" href="index.php">Login</a></p></center>
			</form>
		</div>
	</body>
</html>