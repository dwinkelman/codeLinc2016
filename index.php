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
			<div class="panel panel-default half-width">
				<div class="panel-heading">
					<div class="panel-title"><h1>Junior Achievement</h1></div>
				</div>
				<div class="panel-body">
					Junior Achievement is a widely respected and valued non-profit organization providing experiences that promote the skills, understanding, and perspectives students will need to succeed in a global economy and to become productive contributing members of society, and with your help we can do more. When you work with us you are directly helping the community, and help underfunded schools get the resources they need.
				</div>
			</div>
			<div class="panel panel-default half-width">
				<div class="panel-heading">
					<div class="panel-title"><h1>Volunteering Fund</h1></div>
				</div>
				<div class="panel-body">
					By volunteering at your local school you will be helping to raise money for that school. The more hours you put into volunteering the more money you raise for underfunded schools. You are also given twenty percent of the money you raised in total to give to an underfunded school of your choice.
				</div>
			</div>
		</div>
		
		<!-- include footer here -->
		<?php require_once "footer.php"?>
	</body>
</html>