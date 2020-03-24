<?php

   include '../DB/db.php';

$imiePerson=mysqli_real_escape_string($conn,$_POST['imiePerson']);
$nazwiskoPerson=mysqli_real_escape_string($conn,$_POST['nazwiskoPerson']);
$telefonPerson=mysqli_real_escape_string($conn,$_POST['telefonPerson']);
$emailPerson=mysqli_real_escape_string($conn,$_POST['emailPerson']);
$opisPerson=mysqli_real_escape_string($conn,$_POST['opisPerson']);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

   $sql = "INSERT INTO person (imiePerson, nazwiskoPerson, telefonPerson, emailPerson, opisPerson)VALUES('$imiePerson','$nazwiskoPerson','$telefonPerson','$emailPerson','$opisPerson');";
   
  

  
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);



//header("Location: ../index.php");
