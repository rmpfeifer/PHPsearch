<?php
$servername = "localhost";
$username = "phplink";
$password = "phpsqllink";
$dbname = "landdeeds";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM landdeeds";
$result = $conn -> query($sql);


if ($result->num_rows > 0) {
  // output data of each row
} else {
  echo "0 results";
}
?> 
