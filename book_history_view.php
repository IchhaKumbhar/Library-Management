<?php
// Replace with your database connection details
$servername = "localhost";
$username = "disha";
$password = "disha";
$dbname = "lib_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "Select * from bookhistory;";
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
    echo "0 results";
}

$conn->close();
?>
