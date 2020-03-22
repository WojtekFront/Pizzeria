<?php
    include '../DB/db.php';

$imiePerson=$_POST['imiePerson'];
$nazwiskoPerson=$_POST['nazwiskoPerson'];
$telefonPerson=$_POST['telefonPerson'];
$emailPerson=$_POST['emailPerson'];
$opisPerson=$_POST['opisPerson'];


    $sql = "INSERT INTO person (imiePerson, nazwiskoPerson, telefonPerson, emailPerson, opisPerson)VALUES('$imiePerson','$nazwiskoPerson','$telefonPerson','$emailPerson','$opisPerson');";
    mysqli_query($conn, $sql);

  header("Location: ../index.php?signup=success");
