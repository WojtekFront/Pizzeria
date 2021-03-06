<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Maven+Pro:400,500,600,900&display=swap&subset=latin-ext" rel="stylesheet">     
    <link rel="stylesheet" href="style/style.css" type="text/css">
    
    
    
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div id="topInfo" class="col-sm-12 btn-group d-flex align-items-center" role="group"> <!--top info-->
                <button  class="btn">Darmowa dostawa na terenie Szczecina od 50zł</p></button>
                <button  class="btn">Godziny otwarcia 11.00-24.00</p></button>
                <a href="tel:777777OOO" class="position: sticky btn btn-danger">
                Tel. 777-777-OOO
                </a>
            </div><!--close topInfo-->
            
            <!--navbar-->
            <nav class="navbar navbar-expand-md navbar-mymenu col-sm-12 justify-content-center mb-md-4" id="top"><!--open topA bootstrap navbar-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainmenu"
                aria-expanded="false">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="mainMenu" id="navbarNavAltMarkup" background>
                    <ul class="navbar-nav col-sm-12 d-flex align-items-center justify-content-center">
                        
                        <li class="nav-item">
                            <a class="nav-link btn" href="index.php">GŁÓWNA</a>
                        </li>
                        <!-- <li class="nav-item ">
                            <a class="nav-link" href="#">OFERTA SPECJALNA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">NASZE RESTAURACJE</a>
                        </li>-->
                        <li class="nav-item"> 
                            <a class="nav-link " href="dostawa.php">DOSTAWA</a>
                        </li> 
                        <li class="nav-item"> 
                            <a class="nav-link" href="menu.php">MENU</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="kontakt.php">KONTAKT</a>
                        </li>
                    </ul>
                </div>
            </nav>


    <div class="content col-sm-12  mb-md-4 center-block" id="content"> <!--open content-->

      <div id="mycarousel" class="carousel slide center-block col-sm-12 col-md-8 ml-auto mr-auto" data-ride="carousel">
        <!-- <ol class="carousel-indicators">
          <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
          <li data-target="#mycarousel" data-slide-to="1"></li>
          <li data-target="#mycarousel" data-slide-to="2"></li>
          
        </ol> -->
          <div class="carousel-inner center-block" role="listbox">
            <div class="carousel-item active center-block">
              <img src="img/dos.jpg"  class="center-block" alt="">
              <div class="carousel-caption">
                <h1> DARMOWA DOSTAWA NA TERENIE SZCZECINA<h1>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="img/menu2.jpg"  class="d-block w-100 center-block" alt="">
              <div class="carousel-caption">
                <h1> SPRAWDŹ NASZE MENU<h1>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="img/kon.jpg"  class="center-block w-100 " alt="">
              <div class="carousel-caption">
                <h1>MASZ PYTANIA<br/>LUB UWAGI?<h1>
              </div>
            </div>
            
            <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


        </div><!-- close carousel-inner -->
      </div><!-- close carouselExampleIndicators -->
    </div><!-- close content -->

          

            <div id="contact" class="col-sm-12 ">
            <address class="">
                <p class ="text-center">Szczecin 71-606</br>Sławomira 12/1</br>tel. 777-777-OOO</p>
            </address>
            </div> <!-- close contact-->

            <buttom class="col-sm-12">
            <p class="pl-5">© Copyright 2020</p>
            </buttom>


        </div> <!--close class row-->
    </div><!-- close class container -->
    <script type="text/javascript" src="./text/list1.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>