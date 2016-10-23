<?php session_start(); ?>
<html>
	<head>
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
			<?php
				require_once "loaduser.php";
				$userview = LoadUser($_GET["username"]);
			?>
			
			<link rel="stylesheet" type="text/css" href="styles/user.css"/>
			
			<div class="page-header">
				<h1><?php echo $userview["user-firstname"] . " " . $userview["user-lastname"];?></h1>
			</div>
			<?php 
			if(isset($_SESSION["username"])){
				if($_SESSION["username"] == $userview["user-username"]){
					require_once "donate.php";
				}
			}
			?>
			<div class="panel panel-default half-width">
				<div class="panel-heading">
					<div class="panel-title">Hours Volunteered</div>
				</div>
				<div class="panel-body">
					<div class="list-group">
						<li class="list-group-item">
							<span class="badge">hours
								<?php echo round($userview["user-volunteer-minutes"] / 60) . "  " . round($userview["user-volunteer-minutes"] % 60) . " minutes";?>
							</span>
							Total Hours
						</li>
						<li class="list-group-item">
							<span class="badge">
								<?php echo round($userview["user-volunteer-minutes-month"] / 60) . " hours " . round($userview["user-volunteer-minutes-month"] % 60) . " minutes";?>
							</span>
							Hours Last Month
						</li>
						<li class="list-group-item">
							<span class="badge">
								<?php echo round($userview["user-volunteer-minutes-year"] / 60) . " hours " . round($userview["user-volunteer-minutes-year"] % 60) . " minutes";?>
							</span>
							Hours Last 12 Months
						</li>
					</div>
				</div>
			</div>
			<div class="panel panel-default half-width">
				<div class="panel-heading">
					<div class="panel-title">Volunteering Badges</div>
				</div>
				<div class="panel-body">
					<div class="list-group">
						<li class="list-group-item">
							<span class="badge badge-bronze">
								<?php echo $userview["user-vol-bronze"];?>
							</span>
							Bronze Medals
							<img class="badge-img" src="res/medals/bronze.png"/>
						</li>
						<li class="list-group-item">
							<span class="badge badge-silver">
								<?php echo $userview["user-vol-silver"];?>
							</span>
							Silver Medals
							<img class="badge-img" src="res/medals/silver.png"/>
						</li>
						<li class="list-group-item">
							<span class="badge badge-gold">
								<?php echo $userview["user-vol-gold"];?>
							</span>
							Gold Medals
							<img class="badge-img" src="res/medals/gold.png"/>
						</li>
						<li class="list-group-item">
							<span class="badge badge-platinum">
								<?php echo $userview["user-vol-platinum"];?>
							</span>
							Platinum Medals
							<img class="badge-img" src="res/medals/platinum"/>
						</li>
					</div>
				</div>
			</div>
			<div class="panel panel-default half-width">
				<div class="panel-heading">
					<div class="panel-title">Forum</div>
				</div>
				<div class="panel-body">
					<div class="list-group">
						<li class="list-group-item">
							<span class="badge badge-bronze">
								<?php echo $userview["user-for-rep"];?>
							</span>
							Reputation
						</li>
						<li class="list-group-item">
							<span class="badge badge-bronze">
								<?php echo round($userview["user-forum-minutes"] / 60) . " hours " . round($userview["user-forum-minutes"] % 60) . " minutes";?>
							</span>
							Forum Minutes
						</li>
						<li class="list-group-item">
							<span class="badge badge-bronze">
								<?php echo $userview["user-for-bronze"];?>
							</span>
							Bronze Medals
							<img class="badge-img" src="res/medals/bronze.png"/>
						</li>
						<li class="list-group-item">
							<span class="badge badge-silver">
								<?php echo $userview["user-for-silver"];?>
							</span>
							Silver Medals
							<img class="badge-img" src="res/medals/silver.png"/>
						</li>
						<li class="list-group-item">
							<span class="badge badge-gold">
								<?php echo $userview["user-for-gold"];?>
							</span>
							Gold Medals
							<img class="badge-img" src="res/medals/gold.png"/>
						</li>
					</div>
				</div>
			</div>
			<div class="panel panel-default half-width">
				<div class="panel-heading">
					<div class="panel-title">Share</div>
				</div>
				<div class="panel-body">
					<span class="share facebook"><a href="http://www.facebook.com"><img class="facebook" src="res/facebook.png"/></a></span>
					<span class="share"><a href="http://www.plus.google.com"><img class="google" src="res/google.png"/></a></span>
					<span class="share twitter"><a href="http://www.twitter.com"><img class="twitter" src="res/twitter.png"/></a></span>
				</div>
			</div>
		</div>
		
		<!-- include footer here -->
		<?php require_once "footer.php"?>
	</body>
</html>