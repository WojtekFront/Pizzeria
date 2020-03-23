<?php
session_start();
include_once 'DB/db.php';
include_once 'place/place.php';
include_once 'person/person.php';
include_once 'przedmiot/przedmiot.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styleCss/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    


<h3>Add reservation</h3>
<form action="" class="mainForm">
    <div>
    <label for="Miejsce">Miejsce:</label>
    <?php
     echo $_SESSION['selectPlace'];
    ?>
    </div>

    <div>
        <label for="person">Person: </label>
        <?php
        echo $_SESSION['selectPerson'];
        ?>
    </div>

    <div>
        <label for="subject">Pzedmiot: </label>
        <?php
        echo $_SESSION['selectSubject'];
        ?>
    </div>
   
    <div>
        <label for="dateStart">Start date:</label>
        <input type="date" id="dateStart" name="dateStart"><br>
    </div>
    
    <div>        
        <input type="submit" value="ZAPISZ">
</div>
</form>



</br>
<h3>Add Person</h3>


<form action="" method="POST" class="mainForm">
    <input type="text" name="imiePerson" placeholder="imie" require><br>
    <input type="text" name="nazwiskoPerson" placeholder="nazwisko" require><br>
    <input type="text" name="telefonPerson" placeholder="telefon" require><br>
    <input type="text" name="emailPerson" placeholder="e-mail" require><br>
    <input type="text" name="opisPerson" placeholder="opis" require><br>
    <button type="submit" name="submit">ZAPISZ</button>
</form>












</body>
</html>