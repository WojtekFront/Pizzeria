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

<h3>Dodaj rezerwację:</h3>
<form action="reservation/addReservation.php" class="mainForm" method="POST">
    <div>
        <label for="przedmiot">Pzedmiot: </label>
        <?php
        echo $_SESSION['selectPrzedmiot'];
        ?>
    </div>
    <div>
        <label for="person">Pracownik: </label>
        <?php
        echo $_SESSION['selectPerson'];
        ?>
    </div> 
    <div>
    <label for="Miejsce">Miejsce:</label>
    <?php
     echo $_SESSION['selectPlace'];
    ?>
    </div>
    <div>
        <label for="dateStart">Start date:</label>
        <input type="date" id="dateStart" name="dateStart"><br>
    </div>
    <div>
    <label for="description1">Opis:</label>
    <input type="text" name="description1" placeholder="Opis" require><br>
    </div>
    <div>        
        <input type="submit" value="ZAPISZ">
</div>
</form>

<br>
<h3>Dodaj przedmiot</h3>

<form action="przedmiot/addPrzedmiot.php" method="POST" class="mainForm">
    <input type="text" name="rodzajPrzedmiotu" placeholder="rodzaj przedmiotu" require><br>
    <input type="text" name="oznaczeniePrzedmiotu" placeholder="oznaczenie przedmiotu" require><br>
    <input type="date" name="rokPrzedmiotu"  require><br>
    <input type="text" name="waroscPrzedmiotu" placeholder="warosc przedmiotu (PLN)" require><br>
    <input type="text" name="opisPrzedmiotu" placeholder="opis przedmiotu" require><br>
    <button type="submit" name="submit">ZAPISZ</button>
</form>

<br>
<h3>Dodaj pracownika</h3>

<form action="person/addPerson.php" method="POST" class="mainForm">
    <input type="text" name="imiePerson" placeholder="imie" require><br>
    <input type="text" name="nazwiskoPerson" placeholder="nazwisko" require><br>
    <input type="text" name="telefonPerson" placeholder="telefon" require><br>
    <input type="text" name="emailPerson" placeholder="e-mail" require><br>
    <input type="text" name="opisPerson" placeholder="opis" require><br>
    <button type="submit" name="submit">ZAPISZ</button>
</form>

</br>
<h3>Dodaj miejsce</h3>

<form action="place/addPlace.php" method="Post" class="mainForm">
    <input type="text" name="nazwaMiejsca" placeholder="nazwa miejsca" require><br>
    <input type="text" name="opisMiejsca" placeholder="opis" require><br>
    <button type="submit" name="submit">ZAPISZ</button>
</form>












</body>
</html>