<?php
// $idSubject;
// $rodzajPrzedmiotu;
// $oznaczeniePrzedmiotu;
// $rokPrzedmiotu;
// $waroscPrzedmiotu;
// $opisPrzedmiotu;

$sqlPrzedmiot="SELECT * From przedmiot";
$resultPrzedmiot=mysqli_query($conn, $sqlPrzedmiot);
$opt="";
$opt .="<select name='place1' id='place1'>";
$opt .="<option value=''>wybierz</option><br>";
while($row=mysqli_fetch_assoc($resultPrzedmiot)){
    $opt .="<option value='ttt'>{$row['rodzajPrzedmiotu']}</option>\n";
}
$opt .="</select>";

$_SESSION['selectPrzedmiot']=$opt;