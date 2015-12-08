<?php
$servername = "localhost";
$username = "vanm_eatery";
$password = "vanm0012";
$dbname = "vanm0012_eatery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

?>
