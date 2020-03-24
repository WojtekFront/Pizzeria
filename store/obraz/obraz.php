<?php
session_start();
include_once '../DB/db.php';
include_once '../person/person.php';
// include_once 'obraz/personObraz.php';
?>


<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
   <!-- tworzenie obrazu -->
   <h3>Dodaj rezerwację:</h3>
<form>
    <div>
        <label for="person">Pracownik: </label>
        <?php
        echo $_SESSION['selectPerson'];
        ?>
    </div> 
</form>

<div id="tabela"></div>


</body>
</html>