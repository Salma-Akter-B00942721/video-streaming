<?php

$servername = "tcp:salma123.database.windows.net,1433";
$username = "adminsalma";
$password = "Seuh4khbp16";
$dbname = "videodb";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
