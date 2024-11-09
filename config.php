<?php
$servername = "localhost";
$username = "root";  // Change this to your DB username
$password = "1234";      // Change this to your DB password
$dbname = "rentacar";

// Create connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
