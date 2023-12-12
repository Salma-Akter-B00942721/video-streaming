<?php
$host = 'salma123.mysql.database.azure.com';
$username = 'adminsalma@salma123';
$password = 'Seuh4khbp16';
$database = 'videodb';
$port = 3306;

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$database;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
