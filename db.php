<?php
$servername = "172.31.22.43";
$username = "Kanjangad200549499";
$password = "JuiF3WH9qj";
$dbname = "Kanjangad200549499";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
