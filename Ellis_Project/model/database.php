<?php
// Princess Ellis

$host = "localhost";
$user = "root";
$password = "";
$database = "sdc310_ellis";

function getDB() {
    global $host, $user, $password, $database; // ✅ THIS FIXES IT

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>