<?php
	session_start();
	include("connect.php");

	$votersid = $_POST['votersid'];
	$password = $_POST['password'];

	$check = mysqli_query($connect, "SELECT * FROM user WHERE votersid='$votersid' AND password='$password'");

	if(mysqli_num_rows($check)>0){
		$userdata = mysqli_fetch_array($check);

		$_SESSION['userdata'] = $userdata;

		echo'
			<script>
				window.location = "../partials/home.php";
			</script>
		';
	}else{
		echo'
			<script>
				alert("Invalid Credentials");
				window.location = "../partials/index.php";
			</script>
		';
	}
?>