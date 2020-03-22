<?php 
$hostname ="localhost";
$dbUsername = "root";
$dbPasword = "";
$dataBaseName = "storepizza";

$conn = mysqli_connect($hostname, $dbUsername, $dbPasword, $dataBaseName); 
$query = "SELECT * FROM person;";
$result1 = mysqli_query($conn, $query);

// $query1 ="SELECT * FROM place;";
// $result2 = mysqli_query($conn, $query1);
// $resultLine = mysqli_num_rows($result2);
// $row2;
//  if($resultLine>0){
//     while($row2= mysqli_fetch_assoc($result2)){
//        echo $row2["nazwaMiejsca"]."<br>";
//     }

//  }