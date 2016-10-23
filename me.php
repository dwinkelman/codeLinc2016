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
			<?php
				require_once "loaduser.php";
				LoadUser($_SESSION["username"]);
			?>
			
			<link rel="stylesheet" type="text/css" href="styles/me.css"/>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">Money To Distribute</div>
				</div>
				<div class="panel-body">
					<p>You earned <span style="color:olive; font-size:40px; font-weight:bold" class="money">$42</span> from volunteering to give to local schools involved in Junior Achievement. </p>
					<form class="form-inline">
						<div class="form-group">
						<label for="role-signup">Choose schools to give it to:</label>
						<select multiple class="form-control" id="role-signup">
							<option value="volunteer">Volunteer</option>
							<option value="teacher">Teacher</option>
							<option value="admin">School Administrator (Principal, Curriculum Coordinator, etc.)</option>
							<option value="personnel">Junior Achievement Personnel</option>
						</select>
						<button type="submit" class="btn btn-primary">Sign Up</button>
					</form>
				</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">Hours Volunteered</div>
				</div>
				<div class="panel-body">
					<div class="list-group">
						<li class="list-group-item">
							<span class="badge">
								<?php echo round($_SESSION["volunteer-minutes"] / 60) . " hours " . round($_SESSION["volunteer-minutes"] % 60) . " minutes";?>
							</span>
							Total Hours
						</li>
						<li class="list-group-item">
							<span class="badge">
								<?php echo round($_SESSION["volunteer-minutes-month"] / 60) . " hours " . round($_SESSION["volunteer-minutes-month"] % 60) . " minutes";?>
							</span>
							Hours Last Month
						</li>
						<li class="list-group-item">
							<span class="badge">
								<?php echo round($_SESSION["volunteer-minutes-year"] / 60) . " hours " . round($_SESSION["volunteer-minutes-year"] % 60) . " minutes";?>
							</span>
							Hours Last 12 Months
						</li>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">Volunteering Badges</div>
				</div>
				<div class="panel-body">
					<div class="list-group">
						<li class="list-group-item">
							<span class="badge badge-bronze">
								<?php echo $_SESSION["vol-bronze"];?>
							</span>
							Bronze Medals
							<img class="badge-img" src="res/medals/bronze.png"/>
						</li>
						<li class="list-group-item">
							<span class="badge badge-silver">
								<?php echo $_SESSION["vol-silver"];?>
							</span>
							Silver Medals
							<img class="badge-img" src="res/medals/silver.png"/>
						</li>
						<li class="list-group-item">
							<span class="badge badge-gold">
								<?php echo $_SESSION["vol-gold"];?>
							</span>
							Gold Medals
							<img class="badge-img" src="res/medals/gold.png"/>
						</li>
						<li class="list-group-item">
							<span class="badge badge-platinum">
								<?php echo $_SESSION["vol-platinum"];?>
							</span>
							Platinum Medals
							<img class="badge-img" src="res/medals/platinum"/>
						</li>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">Forum</div>
				</div>
				<div class="panel-body">
					<div class="list-group">
						<li class="list-group-item">
							<span class="badge badge-bronze">
								<?php echo $_SESSION["for-rep"];?>
							</span>
							Reputation
						</li>
						<li class="list-group-item">
							<span class="badge badge-bronze">
								<?php echo round($_SESSION["forum-minutes"] / 60) . " hours " . round($_SESSION["forum-minutes"] % 60) . " minutes";?>
							</span>
							Forum Minutes
						</li>
						<li class="list-group-item">
							<span class="badge badge-bronze">
								<?php echo $_SESSION["for-bronze"];?>
							</span>
							Bronze Medals
							<img class="badge-img" src="res/medals/bronze.png"/>
						</li>
						<li class="list-group-item">
							<span class="badge badge-silver">
								<?php echo $_SESSION["for-silver"];?>
							</span>
							Silver Medals
							<img class="badge-img" src="res/medals/silver.png"/>
						</li>
						<li class="list-group-item">
							<span class="badge badge-gold">
								<?php echo $_SESSION["for-gold"];?>
							</span>
							Gold Medals
							<img class="badge-img" src="res/medals/gold.png"/>
						</li>
					</div>
				</div>
			</div>
		</div>
		
		<!-- include footer here -->
		<?php require_once "footer.php"?>
	</body>
</html>