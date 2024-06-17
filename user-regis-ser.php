<?php
// Start the session
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "disha";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email=$_GET["email"];
$pass=$_GET["pass"];
$repeat_pass=$_GET["repeat_pass"];

if ( $pass == $repeat_pass)
{

$sql = "INSERT INTO users (email, pass, Is_Active)
VALUES ('$email', '$pass', 0)";

if ($conn->query($sql) === TRUE) {
  echo "New User created successfully<br>
  <a href='login.php'>Login</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
else {
    echo" plz enter same password in password and conform password";
}

// Close the database connection
$conn->close();
?>
