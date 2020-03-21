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
    

<?php $a=$query;
echo $a;?>

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




</body>
</html>