<?php
    $servername = "localhost"; //servername
    $dbName = "root"; //username
    $dbPass = "mysql"; //password

    try {
        $conn = new PDO("mysql:host=$servername;dbname=assignment02", $dbName, $dbPass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>