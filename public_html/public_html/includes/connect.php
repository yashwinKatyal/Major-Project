<?php
$servername = "localhost";
$db = "id17925018_threadlane";
$password = "q2aQPRw~b[^FDRyS";
$username = "id17925018_root";


// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>