<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "webDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 // LOGIN USER
//if (isset($_POST['login_user'])) {
  //$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  //$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
 
  	//$password = md5($password);
  	
  $query = "SELECT * FROM Users WHERE email='$email' AND password = '$password'";
  $results = mysqli_query($conn, $query);
  if (mysqli_num_rows($results) == 1) {
    while($row = mysqli_fetch_assoc($result)) {
      $_SESSION["FIRSTNAME"] =  $row["firstname"];
      $_SESSION["LASTNAME"] = $row["lastname"];
      $_SESSION["EMAIL"] = $row["email"];
  }
    readfile("../success.php");
  	 //echo "It exists";
  	}else {
  		readfile("../failure.html");
//  	}
}

$conn->close();

?>