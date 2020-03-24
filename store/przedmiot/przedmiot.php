<?php
// $idSubject;
// $rodzajPrzedmiotu;
// $oznaczeniePrzedmiotu;
// $rokPrzedmiotu;
// $waroscPrzedmiotu;
// $opisPrzedmiotu;

$sqlPrzedmiot="SELECT * From przedmiot";
$resultPrzedmiot=mysqli_query($conn, $sqlPrzedmiot);
$opt ="";
$opt .="<select name='przedmiot' id='name'>";
$opt .="<option value='0'>wybierz</option><br>";
while($row=mysqli_fetch_assoc($resultPrzedmiot)){
    $opt .="<option value='{$row['ID']}'>{$row['rodzajPrzedmiotu']}</option>\n";
}
$opt .="</select>";

$_SESSION['selectPrzedmiot']=$opt;