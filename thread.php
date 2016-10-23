<?php session_start(); ?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles/everything.css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<!-- include header here -->
		<?php require_once "header.php"?>
		
		<div class="content">
			<!-- thread title -->
			<h1><?php echo $_GET["fullname"];?></h1>
			
			<!-- load thread from database -->
			<?php
			require_once "threads.php";
			LoadThread($_GET["topic"], $_GET["name"]);
			?>
			
			<!-- load thread post tool -->
			<?php
			if(isset($_SESSION["username"])){
				if($_SESSION["username"] != ""){
					$new_thread = false;
					$post_topic = $_GET["topic"];
					$post_thread_name = $_GET["name"];
					$post_full_thread_name = $_GET["fullname"];
					$post_username = $_SESSION["username"];
					require_once "postbox.php";
				}
			}else{
				echo "Please log in or sign up to post replies.";
			}
			?>
		</div>
		
		<!-- include footer here -->
		<?php require_once "footer.php"?>
	</body>
</html>