<?php

function db_connect(){
$servername = "localhost";
$username = "root";
$password = "userinterface";
$dbname = "volunteer_hub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	return $conn;
}
// echo "Connected successfully";
}
?>