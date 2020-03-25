<?php
include_once '../DB/db.php';

if(isset($_GET["person"])){
   // echo $_GET["person"];
    $pracownik_ID = $_GET["person"];

    $sql = "SELECT *
    FROM ordersp 
    JOIN place ON ordersp.placeID = place.idMiejsca
    JOIN przedmiot ON ordersp.productID = przedmiot.ID
    
     WHERE ordersp.personID = $pracownik_ID ORDER BY ordersp.orderDate ASC;";
    $result =mysqli_query($conn, $sql);
 
    if(mysqli_num_rows($result)>0){ 
        
        while($d = mysqli_fetch_assoc($result)){
            $arr[] = $d["orderDate"].",  ".$d["rodzajPrzedmiotu"].",  ".$d["oznaczeniePrzedmiotu"].",  ".$d["placeID"].",".$d["nazwaMiejsca"]."  ";
        } 
    }
    else if(mysqli_num_rows($result)==0){
        $arr[]="brak zleceń";
    }

    echo json_encode($arr);
}

// $pracownik = $_POST['name'];
// $opt="";
// if($pracownik>0){
// $sql="SELECT * From ordersp WHERE personID='$pracownik'";


//     $resultPerson=mysqli_query($conn, $sql);
    
//     $opt .="<table >\n";
//     //$opt .="<option value='0'>wybierz</option><br>";
//     while($row=mysqli_fetch_assoc($resultPerson)){
//         $opt .="<tr><th>
//         {$row['productID']}</th><th>
//         {$row['personID']} </th><th> 
//         {$row['placeID']} </th><th> 
//         {$row['orderDate']} </th><th>
//         {$row['description1']}</th></tr>\n";
//     }
//         $opt .="</table>";
//     }else{
//         $opt="wybierz pracownika";
//     }
    
//     $_SESSION["selectObraz"]=$opt;
//     header("Location: ../obraz.php");

