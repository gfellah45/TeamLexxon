<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "webDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$val = mysql_query('select 1 from `Users` LIMIT 1');
if($val !== FALSE){
// Create table
	$sql = "CREATE TABLE Users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(30) NOT NULL,
	password VARCHAR(10) NOT NULL
	)";

	/*$sql = "INSERT INTO Users (firstname, lastname, email, password) VALUES ('John', 'Doe', 'admin')";
	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}*/

}