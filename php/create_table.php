<?php 

require 'config.php';

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

/*$val = mysqli_query($conn, 'select 1 from `Users` LIMIT 1');
$row = mysqli_num_rows($val);
echo $row;
if($val == FALSE){*/
// Create table
	$sql = "CREATE TABLE IF NOT EXISTS Users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(30) NOT NULL,
	password VARCHAR(30) NOT NULL
	)";

	if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	/*$sql = "INSERT INTO Users (firstname, lastname, email, password) VALUES ('John', 'Doe', 'admin')";
	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}*/

//}
?>