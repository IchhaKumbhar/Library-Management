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


$ID=$_GET["ID"];
$UserName=$_GET["UserName"];

$sqlforbook = "SELECT * FROM books where ID=".$ID;
$result = $conn->query($sqlforbook);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $bookname= $row["BookName"];

    $sql = "UPDATE Books SET available=1 WHERE id=". $ID;
    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }
echo "<br>";
    $sql = "INSERT INTO bookhistory (Book, UserName)
    VALUES ('$bookname', '$UserName')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

    }
} else {
  echo "0 results";
}




















$conn->close();
?>