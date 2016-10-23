<html>
	<head>
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
		</div>
		
		<!-- include footer here -->
		<?php require_once "footer.php"?>
	</body>
</html>