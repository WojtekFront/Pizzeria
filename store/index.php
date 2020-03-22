<?php
include_once 'DB/db.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<h3>Add reservation</h3>
<form action="/action_page.php">
    <div>
    <label for="Miejsce">Miejsce:</label>
    <input type="text" id="Miejsce" name="Miejsce"><br>       
    </div>
    <div>
        <label for="person">Person:</label>
        <select id="person">
        <?php while($row1=mysqli_fetch_array($result1)):;?>
        <option value=""><?php echo $row1[1];?></option>
        <?php endwhile;?>
        </select>
    </div>

    <div>
        <label for="person">Miejsce:</label>
        <select id="person">
  
        <option value=""></option>
       
        </select>
    </div>


    <div>
        <label for="dateStart">Start date:</label>
        <input type="date" id="dateStart" name="dateStart"><br>
    </div>
    
    <div>
        <label for="endDate">End date: </label>
        <input type="date" id="endDate" name="endDate"><br>
    </div>
    <div>        
        <input type="submit" value="Submit">
</form>



</br>
<h3>Add Person</h3>
<form action="person/person.php" method="POST">
    <input type="text" name="imiePerson" placeholder="imie" require><br>
    <input type="text" name="nazwiskoPerson" placeholder="nazwisko" require><br>
    <input type="text" name="telefonPerson" placeholder="telefon" require><br>
    <input type="text" name="emailPerson" placeholder="e-mail" require><br>
    <input type="text" name="opisPerson" placeholder="opis" require><br>
    <button type="submit" name="submit">ZAPISZ</button>
</form>












</body>
</html>