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

$sql = "SELECT * FROM Books where available = 0";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
  $row = $result->fetch_assoc();      
      echo "<br><br><br><br>
      <table align='center' border='3px'>
        <tr>
          <th>Book ID</th>
          <th>Book Name</th>
          <th>Auther</th>
          <th>Provide Book </th>
        </tr>";
      while($row = $result->fetch_assoc()){
echo"   <tr align='center'>
          <td>".($row["ID"] ?? " -- ")."</td>
          <td>".($row["BookName"] ?? " -- ")."</td>
          <td>".($row["Auther"] ?? " -- ")."</td>
          <td><button style='color: green;' onclick='approved(" . $row["ID"] . ")'>Borrow</button></td>
        </tr>";
      }

      echo "</table><br><br><br>
      <a href='login.php' align='center'><button>Back</button></a>";

} 
else 
{
  echo "0 results";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
  <script>
    function approved(id) {
      if (confirm("Are you sure you want to Borrow this Book?")) {
        window.location.href = "borrow.php?ID=" + id;
        }
      }
  </script>
</body>
</html>