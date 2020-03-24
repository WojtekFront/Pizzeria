<?php
session_start();
include_once '../DB/db.php';

$pracownik = $_POST['name'];
$opt="";
if($pracownik>0){
$sql="SELECT * From ordersp WHERE personID='$pracownik'";


    $resultPerson=mysqli_query($conn, $sql);
    
    $opt .="<table >\n";
    //$opt .="<option value='0'>wybierz</option><br>";
    while($row=mysqli_fetch_assoc($resultPerson)){
        $opt .="<tr><th>
        {$row['productID']}</th><th>
        {$row['personID']} </th><th> 
        {$row['placeID']} </th><th> 
        {$row['orderDate']} </th><th>
        {$row['description1']}</th></tr>\n";
    }
        $opt .="</table>";
    }else{
        $opt="wybierz pracownika";
    }
    
    $_SESSION["selectObraz"]=$opt;
    header("Location: ../obraz.php");

