<?php
include '../DB/db.php';

$rodzajPrzedmiotu=mysqli_real_escape_string($conn,$_POST['rodzajPrzedmiotu']);
$oznaczeniePrzedmiotu=mysqli_real_escape_string($conn,$_POST['oznaczeniePrzedmiotu']);
$rokPrzedmiotu=mysqli_real_escape_string($conn,$_POST['rokPrzedmiotu']);
$waroscPrzedmiotu=mysqli_real_escape_string($conn,$_POST['waroscPrzedmiotu']);
$opisPrzedmiotu=mysqli_real_escape_string($conn,$_POST['opisPrzedmiotu']);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

   $sql = "INSERT INTO przedmiot (rodzajPrzedmiotu, oznaczeniePrzedmiotu, rokPrzedmiotu, waroscPrzedmiotu, opisPrzedmiotu)VALUES('$rodzajPrzedmiotu','$oznaczeniePrzedmiotu','$rokPrzedmiotu','$waroscPrzedmiotu','$opisPrzedmiotu');";
   
  

  
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);



//header("Location: ../index.php");
