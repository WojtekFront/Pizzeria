<?php
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
