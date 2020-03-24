<?php
session_start();
include_once 'DB/db.php';
include_once 'person/person.php';
// include_once 'obraz/personObraz.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- tworzenie obrazu -->
   <h3>Dodaj rezerwację:</h3>
<form action="obraz/personObraz.php" class="mainForm" method="POST">
   
    <div>
        <label for="person">Pracownik: </label>
        <?php
        echo $_SESSION['selectPerson'];
        ?>
    </div> 
    <div>        
        <input type="submit" value="Wyświetl">
    </div>
</form>

<?php

if(isset($_SESSION["selectObraz"])){
echo $_SESSION["selectObraz"];

}
?>


</body>
</html>