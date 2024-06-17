<?php
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

$name=$_GET["name"];
$email=$_GET["email"];
$phone_number=$_GET["phone_number"];
$message=$_GET["message"];

$sql = "INSERT INTO contactus (Name, email, Phone_number, message)
VALUES ('$name', '$email', '$phone_number', '$message')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>