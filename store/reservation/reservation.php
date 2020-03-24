<?php

include_once '../DB/db.php';


$productID=$_POST['przedmiot'];
$personID=$_POST['name'];
$placeID=$_POST['place'];
$orderDate=$_POST['dateStart'];
$description1=$_POST['description1'];
echo $productID.$personID.$placeID.$orderDate.$description1;

$sql = "INSERT INTO ordersp (productID, personID, placeID, orderDate, description1)
    VALUES('$productID','$personID','$placeID','$orderDate','$description1')";
    
   mysqli_query($conn, $sql);
   

   if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



  //header("Location: ../index.php");
