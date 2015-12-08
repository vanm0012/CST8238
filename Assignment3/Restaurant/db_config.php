<?php 
$servername = "localhost";
$username = "rejaulco_eatery";
$password = "cst@8238";
$dbname = "rejaulco_eatery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

?>