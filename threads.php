<?php

// gets an SQL row list of all the earliest posts from all unique threads from the specified topic
function LoadThreads($topic){
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

	// thanks, Tim!!!!
	$sql = "SELECT f1.* FROM `forum` AS f1 INNER JOIN (SELECT `thread-name`, COUNT(*), MIN(`time-posted`) AS min_time_posted FROM `forum` WHERE `topic`='$topic' GROUP BY `thread-name` ORDER BY min_time_posted DESC) AS f2 ON f1.`thread-name`=f2.`thread-name` AND f1.`time-posted`=f2.min_time_posted";
	$result = $conn->query($sql);

	return $result;
}

// prints threads into a preview format
function PrintThreads($rows){
	if ($rows->num_rows > 0) {
		// output data of each row
		while($row = $rows->fetch_assoc()) {
			echo '<link rel="stylesheet" type="text/css" href="styles/forum.css"/>';
			echo '
			<div class="list-group">
				<div class="panel panel-default forum-item-preview">
					<div class="panel-heading forum-title">
						<a href="thread.php?topic=' . $row["topic"] . '&name=' . $row["thread-name"] . '&fullname=' . $row["full-thread-name"] . '"/>' . $row["full-thread-name"] . '</a>
					</div>
					<div class="panel-body forum-contents">Q: 
						' . $row["html-contents"] . '
					</div>
					<div class="panel-footer forum-details">
						<span class="username"><a href=user.php?username=' . $row["username"] . '>' . $row["username"] . '</a></span>
						<span class="date">' . $row["time-posted"] . '</span>
						<span class="rep">' . (($row["flags"] != 0) ? '(Flagged)' : $row["rep"] . ' Upvotes') . '</span>
					</div>
				</div>
			</div>';
		}
	}else{
		echo '<div class="list-group">
			There are no posts in this topic.
		</div>';
	}
}

// loads a thread into a viewable format
function LoadThread($topic, $thread_name){
	$thread_name = urldecode($thread_name);
	
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

	$sql = "SELECT * FROM `forum` WHERE `thread-name`='$thread_name' ORDER BY `time-posted` ASC";
	$rows = $conn->query($sql);

	if ($rows->num_rows > 0) {
		// output data of each row
		$count = 0;
		while($row = $rows->fetch_assoc()) {
			echo '<link rel="stylesheet" type="text/css" href="styles/forum.css"/>';
			echo '
			<div class="list-group">
				<div class="panel panel-default forum-item ' . (($count == 0) ? 'forum-question' : '') . '">
					<div class="panel-body forum-contents">
						' . $row["html-contents"] . '
					</div>
					<div class="panel-footer forum-details ' . (($row["flags"] != 0) ? 'flagged' : '') . '">
						<span class="username"><a href=user.php?username=' . $row["username"] . '>' . $row["username"] . '</a></span>
						<span class="date">' . $row["time-posted"] . '</span>
						<span class="rep">' . (($row["flags"] != 0) ? '(Flagged)' : $row["rep"] . ' Upvotes') . '</span>
						<span class="glyphicon glyphicon-thumbs-up glyphicon-align-right" title="Upvote"></span>
						<span class="glyphicon glyphicon-hand-down glyphicon-align-right" title="Flag as abusive"></span>
					</div>
				</div>
			</div>';
			$count++;
		}
	}else{
		echo '<div class="list-group">
			This thread does not exist.
		</div>';
	}
}

?>