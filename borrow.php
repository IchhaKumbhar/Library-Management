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

$sqlforbook = "SELECT * FROM books where ID=".$ID;
$result = $conn->query($sqlforbook);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

      echo "<br>books: " . $row["BookName"];

    $sqlforuser = "SELECT UserName FROM users where Authenticated=0";
    $result2 = $conn->query($sqlforuser);
    
    if ($result2->num_rows > 0) {
      // output data of each row
      
      echo "<!DOCTYPE html>
      <html>
      <body>
        <form action='bookhistory.php' method='get'>
          <Label>Select the user </Label>
          
          <select name='ID'>
          <option>".$ID."</option>
          </select>

          <select name='UserName'>";
      while($row = $result2->fetch_assoc()) {
              echo "<option>". $row["UserName"]."</option>";
      }
            echo "</select>
            <button name='submit'>submit</button>
            </form></body></html>";
          

    } else {
      echo "0 results";
    }


}
} else {
  echo "0 results";
}


$conn->close();
?>