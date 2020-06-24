<?php
$servername = "localhost";
$username = "matt";
$password = "sma||ba11";
$database = 'reactApp';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>