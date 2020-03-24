<?php
//session_start();
//    include '../DB/db.php';
// $idMiejsca;
// $nazwaMiejsca;
// $opisMiejsca;

$sqlPlace="SELECT * From place";
$resultPlace=mysqli_query($conn, $sqlPlace);
$opt="";
$opt .="<select name='place' id='place'>";
$opt .="<option value='0'>wybierz</option><br>";
while($row=mysqli_fetch_assoc($resultPlace)){
    $opt .="<option value='{$row['idMiejsca']}'>{$row['nazwaMiejsca']}</option>\n";
}
$opt .="</select>";
// $opt="jan";
$_SESSION['selectPlace']=$opt;

