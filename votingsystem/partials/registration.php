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
			
			<h1 class="text-center">HFDB EVS</h1>
			<br>
			
			<form action="../api/register.php" method="POST">

				<div class="form-group has-feedback">
					<label class="form-label">First name</label>
					<input class="form-control" type="text" name="firstname" required>
				</div>

				<div class="form-group has-feedback">
					<label class="form-label">Last name</label>
					<input class="form-control" type="text" name="lastname" required>
				</div>

				<div class="form-group has-feedback">
					<label class="form-label">Voters ID</label>
					<input class="form-control" type="text" name="votersid" required>
				</div>

				<div class="form-group has-feedback">
					<label class="form-label" for="password">Password</label>
					<input class="form-control" type="password" name="password" required>
				</div>

				<div class="form-group has-feedback">
					<label class="form-label" for="password">Confirm Password</label>
					<input class="form-control" type="password" name="cpassword" required>
				</div>

				<div class="row">
					<div class="col-xs-12">
				<input type="submit" class="btn btn-primary w-100" value="SIGN IN">
				</div>
			</form>

		</div>
		<div>
			<form></br>
				<center><p>Already have an account? <a href="index.php">Login</a></p></center>
			</form>
		</div>
	</body>
</html>