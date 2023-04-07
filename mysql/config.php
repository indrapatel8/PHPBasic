<?php
//error_reporting(~E_ALL);
$dbName = "db_cyber_wamp";
$conn = new mysqli("localhost", "root", "");
if ($conn->connect_error != null) {
    die("Something Went Wrong....");
}
//creating database if not exist......
if (!mysqli_select_db($conn, $dbName)) {
    if (mysqli_query($conn, "CREATE DATABASE  IF NOT EXISTS " . $dbName)) {
        if (mysqli_affected_rows($conn) == 1) {
            echo "<h3>Database created Succussfully</h3>";
        } else
            echo "<h3 style='color:red;'>Something went wrong, Database Creation Error " . $conn->connect_error . "</h3>";
    } else
        echo "<h3 style='color:red;'>Something went wrong, Error creating database: " . $conn->connect_error . "</h3>";
}

mysqli_select_db($conn, $dbName);
$sqlTable = "CREATE TABLE IF NOT EXISTS ".$dbName.".employees (eid INT NOT NULL AUTO_INCREMENT , ename VARCHAR(100) NOT NULL , eaddress VARCHAR(100) NOT NULL , hobby VARCHAR(100) NOT NULL , gender VARCHAR(100) NOT NULL , PRIMARY KEY (eid)) ENGINE = MyISAM;";
//creating Table if not exist......

if (mysqli_query($conn, $sqlTable)) {
    if (mysqli_affected_rows($conn) == 1) {
        echo "<h3>Table created Succussfully</h3>";
    } else{
        echo "<h3 style='color:red;'>" . $conn->connect_error . "</h3>";
    }
}
else echo "".$conn->connect_error ;