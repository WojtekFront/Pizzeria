<?php 
$hostname ="localhost";
$dbUsername = "root";
$dbPasword = "";
$dataBaseName = "storepizza";

$connect = mysqli_connect($hostname, $dbUsername, $dbPasword, $dataBaseName); 
$query = 'SELECT * FROM person;';
$result1 = mysqli_query($connect, $query);

