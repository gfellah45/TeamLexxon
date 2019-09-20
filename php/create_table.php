<?php 

//require 'config.php';

$servername = "localhost";
$username = "id10940165_lexxon";
$password = "weblexxon";
$dbname = "id10940165_users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create table
	$sql = "CREATE TABLE IF NOT EXISTS Users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(30) NOT NULL,
	password VARCHAR(30) NOT NULL
	)";

	if (mysqli_query($conn, $sql)) {
	} else {
		readfile("../failure.html");
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

?>