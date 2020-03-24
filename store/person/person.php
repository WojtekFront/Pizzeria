<?php
//session_start();
//    include '../DB/db.php';

// $imiePerson=mysqli_real_escape_string($conn,$_POST['imiePerson']);
// $nazwiskoPerson=mysqli_real_escape_string($conn,$_POST['nazwiskoPerson']);
// $telefonPerson=mysqli_real_escape_string($conn,$_POST['telefonPerson']);
// $emailPerson=mysqli_real_escape_string($conn,$_POST['emailPerson']);
// $opisPerson=mysqli_real_escape_string($conn,$_POST['opisPerson']);


   // $sql = "INSERT INTO person (imiePerson, nazwiskoPerson, telefonPerson, emailPerson, opisPerson)VALUES('$imiePerson','$nazwiskoPerson','$telefonPerson','$emailPerson','$opisPerson');";
    $sqlSelect="SELECT * From person";
    $resultPerson=mysqli_query($conn, $sqlSelect);
    $opt="";
    $opt .="<select name='name' id='person'>";
    $opt .="<option value='0'>wybierz</option><br>";
    while($row=mysqli_fetch_assoc($resultPerson)){
        $opt .="<option value='{$row['idPerson']}'>{$row['nazwiskoPerson']} {$row['imiePerson']}</option>\n";
    }
    $opt .="</select>";
  
    
    $_SESSION["selectPerson"]=$opt;
 // header("Location: ../index.php");
