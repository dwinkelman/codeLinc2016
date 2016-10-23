<div class="header">
	<link rel="stylesheet" type="text/css" href="styles/header-footer.css"/>
	
	<!-- logos are a couple of images with transparent backgrounds, the main JA logo on the left and the volunteer site on the right -->
	<div class="logo-banner">
		<img class="ja-logo" src="res/ja-logo.png">
		<img class="vn-logo" src="res/vn-logo.png">
	</div>
	
	<!-- navigation menu with dropdown bars -->
	<ul class="nav nav-tabs">
		<li><a href="index.php">Home</a></li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="forum.php">Volunteer Forums</a>
			<ul class="dropdown-menu">
				<li><a href="forum.php?topic=qa">Volunteer Question & Answer</a></li>
				<li><a href="forum.php?topic=xp">Experience Share</a></li>
				<li><a href="forum.php?topic=sb">Suggestions & Brainstorming</a></li>
				<li><a href="forum.php?topic=te">Teachers</a></li>
			</ul>
		</li>
		<!-- get specific user information here. Replace "User Information" with the user's name
				also replace with "Log in" if the username == "guest" -->
		<?php
		$_SESSION["firstname"] = "Daniel";
		$_SESSION["lastname"] = "Winkelman";
		if(!isset($_SESSION["username"])){
			require_once "login.php";
			require_once "signup.php";
		}else if($_SESSION["username"] == ""){
			require_once "login.php";
			require_once "signup.php";
		}else{
			echo '<li><a href="user.php?username=' . $_SESSION["username"] . '">' . $_SESSION["firstname"] . " " . $_SESSION["lastname"] . "'s Profile</a></li>";
			echo '<li><a href="logout.php">Log Out</a></li>';
		}
		?>
	</ul>
</div>