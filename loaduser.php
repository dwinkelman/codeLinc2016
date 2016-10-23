<?php

// loads user information into a returned dictionary from the users database
function LoadUser($username){
	$output = [];
	
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

	$sql = "SELECT * from `users` WHERE username='$username';";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			foreach($row as $key => $value){
				$output["user-" . $key] = $value;
			}
		}
	} else {
		echo "No users found with username $username";
	}
	$conn->close();
	
	return $output;
}

function TotalMinutes(){
	
}
?>