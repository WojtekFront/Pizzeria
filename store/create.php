<?php

include_once 'DB/db.php';

$messageCreate="";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS myDB";
if (mysqli_query($conn, $sql)) {
    $messageCreate.= "Database created successfully";










} else {
    $messageCreate.=  "Error creating database: " . mysqli_error($conn);
}
echo  $messageCreate;
mysqli_close($conn);


