<?php
include '../DB/db.php';

$nazwaMiejsca=mysqli_real_escape_string($conn,$_POST['nazwaMiejsca']);
$opisMiejsca=mysqli_real_escape_string($conn,$_POST['opisMiejsca']);;

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{

   $sql = "INSERT INTO place (nazwaMiejsca, opisMiejsca)VALUES('$nazwaMiejsca','$opisMiejsca');";
   
    //mysqli_query($conn, $sql);

  
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}    
    mysqli_close($conn);