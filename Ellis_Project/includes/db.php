<?php
/*
    Name: Princess Ellis
    File: db.php
    Description: Connects the PHP application to the MySQL database.
*/

$host = "localhost";
$user = "root";
$password = "";
$database = "sdc310_ellis";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>