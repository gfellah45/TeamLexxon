<?php

require 'create_table.php';

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "webDB";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security
if (isset($_POST['email']))
{
$email = mysqli_real_escape_string($conn, $_POST['email']);
}
if (isset($_POST['password']))
{
$passwrd = mysqli_real_escape_string($conn, $_POST['password']);
}
if (isset($_POST['firstname']))
{
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
}
if (isset($_POST['lastname']))
{
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
}
/*
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
*/

// Attempt insert query execution
$sql = "INSERT INTO Users (firstname, lastname, email, password) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$passwrd."')";

if ($conn->query($sql) === TRUE) {
	readfile("../success.html");
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>