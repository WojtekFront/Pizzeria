<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <script type="text/javascript" src="text/list1.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Maven+Pro:400,500,600,900&display=swap&subset=latin-ext" rel="stylesheet">     
    <link rel="stylesheet" href="style/style.css" type="text/css">
    
    
    
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div id="topInfo" class="col-sm-12 btn-group" role="group"> <!--top info-->
                <button  class="btn">Darmowa dostawa na terenie Szczecina od 50zł</p></button>
                <button  class="btn">Godziny otwarcia 11.00-24.00</p></button>
                <a href="tel:777777OOO" class="position: sticky">
                    <button type="button" class="btn btn-danger" > Tel. 777-777-OOO</button>
                </a>
            </div><!--close topInfo-->
            
            <!--pizza and info-->
            <nav class="navbar navbar-expand-md navbar-mymenu col-sm-12 justify-content-center mb-md-4" id="top"><!--open topA bootstrap navbar-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainmenu"
                aria-expanded="false">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="mainMenu" id="navbarNavAltMarkup">
                    <ul class="navbar-nav justify-content-left col-sm-12">
                        <li class="nav-item col-sm-3" >
                        <img src="img/nav.jpg" alt="" class=" img-fluid"> 
                        </li>
                    <!-- </ul>
                    <ul class="navbar-nav col-sm-9 justify-content-center" > -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">MENU</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">OFERTA SPECJALNA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">NASZE RESTAURACJE</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="#">DOSTAWA</a>
                        </li>
                        <li class="nav-item"> 
                        <a class="nav-link" href="#">KONTAKT</a>
                        </li>
                    </ul>
                </div>
            </nav>


            

            <div id="offert" class="mb-md-4 col-sm-12 table-responsive">
            <button type="button" onClick="function1()" href="#" role="button" id="offert">Call the function</button>
            
    <script>
    function function1(){
    document.write(
        `
        
        <table class="table table-sm table-striped">
                    <thead>
                        <tr>
                        <th scope="col" >lp</th>
                        <th scope="col" >nazwa</th>
                        <th scope="col">składniki</th>
                        <th scope="col">mała</th>
                        <th scope="col">duża</th>
                        <th scope="col">gigant</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>MARGHERITA </td>
                        <td>ser</td>
                        <td>15,00</td>
                        <td>20,00</td>
                        <td>25,00</td>
                        </tr>
                        
                        <tr>
                        <th scope="row" class="secLine">2</th>
                        <td>MAFFIA</td>
                        <td>ser, szynka, pieczarki, szynka wędzona, cebula</td>
                        <td>20,00</td>
                        <td>24,00</td>
                        <td>35,00</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">3</th>
                        <td>PEPERONI</td>
                        <td>sos chilli, ser, szynka, papryka peperoni, pieczarki, szynka wędzona, oliwki, salami peperoni, papryczki jalapenio</td>
                        <td>25,00</td>
                        <td>28,00</td>
                        <td>40,00</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">4</th>
                        <td>SZPINAKOWA</td>
                        <td>sos szpinakowy, ser, suszone pomidory, ser sałatk., świeża bazylia</td>
                        <td>20,00</td>
                        <td>22,00</td>
                        <td>41,00</td>
                        </tr>

                        <tr>
                        <th scope="row">5</th>
                        <td>WIEJSKA</td>
                        <td>sos szpinakowy, ser, suszone pomidory, ser sałatk., świeża bazylia</td>
                        <td>20,00</td>
                        <td>22,00</td>
                        <td>41,00</td>
                        </tr>

                        <tr>
                        <th scope="row">6</th>
                        <td>Wiejska</td>
                        <td>ser, boczek X 2 , kiełbasa, cebula, ogórek,</td>
                        <td>20,00</td>
                        <td>22,00</td>
                        <td>41,00</td>
                        </tr>

                        <tr>
                        <th scope="row">7</th>
                        <td>Wiejska</td>
                        <td>ser, boczek X 2 , kiełbasa, cebula, ogórek,</td>
                        <td>20,00</td>
                        <td>22,00</td>
                        <td>41,00</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">8</th>
                        <td>Wiejska</td>
                        <td>ser, boczek X 2 , kiełbasa, cebula, ogórek,</td>
                        <td>20,00</td>
                        <td>22,00</td>
                        <td>41,00</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">9</th>
                        <td>Wiejska</td>
                        <td>ser, boczek X 2 , kiełbasa, cebula, ogórek,</td>
                        <td>20,00</td>
                        <td>22,00</td>
                        <td>41,00</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">10</th>
                        <td>Wiejska</td>
                        <td>ser, boczek X 2 , kiełbasa, cebula, ogórek,</td>
                        <td>20,00</td>
                        <td>22,00</td>
                        <td>41,00</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">11</th>
                        <td>Wiejska</td>
                        <td>ser, boczek X 2 , kiełbasa, cebula, ogórek,</td>
                        <td>20,00</td>
                        <td>22,00</td>
                        <td>41,00</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">12</th>
                        <td>Wiejska</td>
                        <td>ser, boczek X 2 , kiełbasa, cebula, ogórek,</td>
                        <td>20,00</td>
                        <td>22,00</td>
                        <td>41,00</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">13</th>
                        <td>Wiejska</td>
                        <td>ser, boczek X 2 , kiełbasa, cebula, ogórek,</td>
                        <td>20,00</td>
                        <td>22,00</td>
                        <td>41,00</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">14</th>
                        <td>Wiejska</td>
                        <td>ser, boczek X 2 , kiełbasa, cebula, ogórek,</td>
                        <td>20,00</td>
                        <td>22,00</td>
                        <td>41,00</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">15</th>
                        <td>Wiejska</td>
                        <td>ser, boczek X 2 , kiełbasa, cebula, ogórek,</td>
                        <td>20,00</td>
                        <td>22,00</td>
                        <td>41,00</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">16</th>
                        <td>Wiejska</td>
                        <td>ser, boczek X 2 , kiełbasa, cebula, ogórek,</td>
                        <td>20,00</td>
                        <td>22,00</td>
                        <td>41,00</td>
                        </tr>
                                                
                    </tbody>
                </table>`
        
    )};
</script>
            </div> <!--close offert-->

            <div id="contact" class="col-sm-12 ">
            <address class="">
                <p class ="">Szczecin 71-606</br> Sławomira 12/1></br> tel. 777-777-OOO</p>
            </address>
            </div> <!-- close contact-->

            <buttom class="col-sm-12">
            <p>© Copyright 2020</p>
            </buttom>


        </div> <!--close class row-->
    </div><!-- close class container -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>