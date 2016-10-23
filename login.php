<li class="dropdown">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<?php
	// check if submission was just made
	if(isset($_POST["username"])){
		if($_POST["username"] != ""){
			$servername = "localhost";
			$serverusername = "root";
			$password = "";
			$dbname = "users";

			// Create connection
			$conn = new mysqli($servername, $serverusername, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			$sql_username_exists = "SELECT COUNT(*) AS count FROM `users` WHERE username='" . $_POST["username"] . "'";
			$sql_username_password = "SELECT COUNT(*) AS count FROM `users` WHERE `username`='" . $_POST["username"] . "' AND `password`='". $_POST["password"] . "'";
			$ue_results = $conn->query($sql_username_exists);
			$row = $ue_results = $ue_results->fetch_assoc();
			if($row["count"] == 0){
				echo "<script>alert('Username is not in the database')</script>";
			}else{
				$up_results = $conn->query($sql_username_password);
				$row = $up_results->fetch_assoc();
				if($row["count"] == 0){
					echo "<script>alert('Password is incorrect for the username')</script>";
				}else{
					$_SESSION["username"] = $_POST["username"];
					require_once "loaduser.php";
					$data = LoadUser($_POST["username"]);
					$_SESSION["firstname"] = $data["user-firstname"];
					$_SESSION["lastname"] = $data["user-lastname"];
					echo '<script>window.location = window.location</script>';
				}
			}
		}
	}
	?>

	<a class="dropdown-toggle" data-toggle="dropdown" href="forum.php">Login</a>
	<ul class="dropdown-menu">
		<div class="login">
			<link rel="stylesheet" type="text/css" href="styles/login.css"/>
			<form class="form-inline" action="index.php" method="post">
				<div class="form-group">
					<input type="text" class="form-control" id="username-login" name="username" placeholder="Username">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="password-login" name="password" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
			<div class="g-signin2" data-onsuccess="onSignIn"></div>
		</div>
	</ul>
</li>
