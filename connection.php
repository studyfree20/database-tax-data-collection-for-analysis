<?php
 
$servername = "localhost";
$dbname = "";
$username = "";
$password = "";
 
// Connection
$conn = mysqli_connect($servername,
               $username, $password);
 
// Check if connection is
// Successful or not
if (!$conn) {
  die("Connection failed: "
      . mysqli_connect_error());
}
echo "Connected successfully";
?>