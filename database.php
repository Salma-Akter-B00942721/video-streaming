<?php

    //$con = new mysqli('localhost', 'root', '','video_streaming');

    // PHP Data Objects(PDO) Sample Code:
try {
    $con = new PDO("sqlsrv:server = tcp:salma123.database.windows.net,1433; Database = videodb_2023-12-12T20-22Z", "adminsalma", "Seuh4khbp16");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "adminsalma", "pwd" => "Seuh4khbp16", "Database" => "videodb_2023-12-12T20-22Z", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:salma123.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>