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


$sql = "Select * from books;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border='3px'>
    <tr>
    <th>ID </th>
    <th>Book Name </th>
    <th>Auther Of The Book</th>
    <th>Is Available</th></tr>";

    while($row = $result->fetch_assoc()) {
        
        echo "<tr align='center'>
        <td>". $row["ID"]. "</td>
        <td>". $row["BookName"]. "</td>
        <td>". $row["Auther"]. "</td>
        <td>". $row["available"]. "</td>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
