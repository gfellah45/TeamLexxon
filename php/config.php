<?php 
$servername = "localhost";
$username = "id10940165_lexxon";
$password = "weblexxon";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
/*
$sql = "CREATE DATABASE IF NOT EXISTS webDB";
if ($conn->query($sql) === TRUE) {
    //echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
*/
$conn->close();
?>