<?php
// Replace with your database connection details
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











$sql = "SELECT UserName FROM users WHERE Is_Active=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {


$UserName= $row["UserName"];

$sql = "SELECT * FROM bookhistory WHERE UserName= '$UserName';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border='3px'>
    <tr>
    <th>ID </th>
    <th>Book Name </th>
    <th>User Borrowed</th>
    <th>Returned</th>
    <th>Date and Time</th></tr>";

    while($row = $result->fetch_assoc()) {
        
        echo "<tr align='center'>
        <td>". $row["ID"]. "</td>
        <td>". $row["Book"]. "</td>
        <td>". $row["UserName"]. "</td>
        <td>". $row["returned"]. "</td>
        <td>". $row["DateTaken"]. "</td>";
    }
} else {
    echo "No Book Borrowed Yet ";
}


}
} else {
  echo "01 results";
}


$conn->close();
?>
