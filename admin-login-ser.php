<?php
session_start();
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


$UserName=$_GET["email"];
$Pass=$_GET["pass"];
$_SESSION['UserName'] = $UserName;

$sql = "SELECT * FROM admin where Email='$UserName'";
$result = $conn->query($sql);

$row = mysqli_fetch_assoc($result);
        echo "
        <html>
        <head>
        <link rel='icon' href='logo.png'><title>Lgoin Account</title>
        <style>
        .scale-up-center {
        -webkit-animation: scale-up-center 0.5s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0s alternate both;
        animation: scale-up-center 0.5s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0s alternate both;
        }
        @-webkit-keyframes scale-up-center {
        0% {
        -webkit-transform: scale(0.5);
        transform: scale(0.5);
        }
        100% {
        -webkit-transform: scale(1);
        transform: scale(1);
        }
        }
        @keyframes scale-up-center {
        0% {
        -webkit-transform: scale(0.5);
        transform: scale(0.5);
        }
        100% {
        -webkit-transform: scale(1);
        transform: scale(1);
        }
        }

        body {
        background-color: #244cbf; /* black with blue shade */
        color: white; /* white text color */
        }
        .btn {
        display: inline-block;
        padding: 12px 24px;
        border: 2px solid #aaa; /* outline button border color */
        color: #aaa; /* outline button text color */
        border-radius: 4px;
        font-size: 18px;
        text-decoration: none;
        transition: all 0.3s ease;
        }

        .btn:hover {
        background-color: #aaa; /* solid button background color */
        color: white; /* solid button text color */
        border: 2px solid #aaa; /* solid button border color */
        }
        </style></head><body class='scale-up-center' align='center'><br><br><br><br><br><br><br>";


// check if username is correct
if ($result->num_rows > 0) 
{
  // Check if the password matches the password in the database and if the user is authenticated
  if ($row['Pass'] == $Pass) 
  {

    $sqlUpdate1 = "UPDATE admin SET Is_Active = 0"; //to set all is_active as 0
    if ($conn->query($sqlUpdate1) === TRUE)  
    {

      $sqlUpdate2 = "UPDATE admin SET Is_Active = 1 WHERE Email='$UserName'"; //to set is_active 
      if ($conn->query($sqlUpdate2) === TRUE) 
      {

        echo "<h1> You Are a Staf Member <br></h1><br>
        <h1>click on the button to Provide Available Books</h1><br>
        <a href='provide.php' class='btn'>Provide Books</a> <br><br> 
        
        <h1>See Borrowed Books </h1><br>
        <a href='bookskistoryview.php' class='btn'>See Borrowed Books</a>

        <h1>See All Books </h1><br>
        <a href='AllBooks.php' class='btn'>See All Books</a>
        ";// goes to tables     ^insert new result
        } 
        
      else {
        echo "Error updating record: to 1 " . $conn->error;
      }
    }
    else {
      echo "Error updating record: " . $conn->error;
    }
  }
  else // incorrect pass
  {
  echo "<h1>Plz type correct UserName and Password</h1>";
  echo "<br><br><a href='login.php' class='btn'>Back</a>";// goes to login pg
  }
}
else // incorrect username
{
echo "<h1>Plz enter correct UserName </h1>";
echo "<br><br><a href='login.php' class='btn'>Back</a>"; // goes to login pg
}


echo "</body></html>";
// Close the database connection
mysqli_close($conn);
?>


