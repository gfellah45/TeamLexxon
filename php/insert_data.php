<?php session_start();

require 'create_table.php';

$servername = "localhost";
$username = "id10940165_lexxon";
$password = "weblexxon";
$dbname = "id10940165_users";

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

// Attempt insert query execution
$sql = "INSERT INTO `Users` (firstname, lastname, email, password) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$passwrd."')";

if ($conn->query($sql) === TRUE) {
    
      $_SESSION["FIRSTNAME"] =  $firstname;
      $_SESSION["LASTNAME"] = $lastname;
      $_SESSION["EMAIL"] = $email;
      
    include 'success.php';
}else {
    readfile("../failure.html");
}

// Close connection
$conn->close();
?>