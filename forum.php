<?php session_start(); ?>
<html>
<?php
	$titles = [
	"qa" => "Volunteer Question & Answer",
	"xp" => "Experience Share",
	"sb" => "Suggestions & Brainstorming",
	"te" => "Teachers"];
	
	$descriptions = [
	"qa" => "Here volunteers, teachers, and school administrators ask questions for other members of the community to answer relating to teaching approaches, specific situations, the curriculum, and other similar topics. This is intended for volunteers and teachers to network and share ideas.",
	"xp" => "As you work with Junior Achievement you will gain helpful and shareable experience as well as incredibly positive experiences. Here you can share that with the other volunteers.",
	"sb" => "We wish to hear from our members in order to create a better and easier experience for everyone involved. This includes suggested modifications to the curriculum, new programs and outreach, and similar ideas. These ideas can be refined and criticized at this forum.",
	"te" => "Here teachers can discuss their Junior Achievement curriculums, how to get more volunteers involved in the community, and how to expand Junior Achievement to other schools."];
?>
	<head>
		<title><?php echo $titles[$_GET["topic"]];?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/everything.css"/>
	</head>
	<body>
		<!-- include header here -->
		<?php require_once "header.php"?>
		
		<div class="content">
			<!-- descriptions and titles for forums organized by topic keys -->
			
			
			<div class="page-header">
				<!-- forum header fetches content from the above dictionary -->
				<h1><?php echo $titles[$_GET["topic"]];?><br><small><?php echo $descriptions[$_GET["topic"]];?></small></h1>
				
				<hr>
				
				<?php
				if(isset($_SESSION["username"])){
					if($_SESSION["username"] != ""){
						echo '<div class="panel panel-default forum-item-preview">
							<div class="panel-heading forum-title">
								<a href="newthread.php?topic=' . $_GET["topic"] . '">Create a new thread</a>
							</div>
						</div>';
					}
				}
				?>
				
				<!-- list of forum threads displayed -->
				<?php
					require_once "threads.php";
					PrintThreads(LoadThreads($_GET["topic"]));
				?>
				
				<?
			</div>
			
		</div>
		
		<!-- include footer here -->
		<?php require_once "footer.php"?>
	</body>
</html>