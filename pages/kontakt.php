<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Website/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light boja">
    <a class="navbar-brand" href="#"><img src="/Website/images/logo.png" class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbarToggler10"
        aria-controls="myNavbarToggler10" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbarToggler10">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" style="color:white" href="Website/index.php">Pocetna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:white"  href="../pages/about.php">O nama</a>
            </li>
            <?php
            if(isset($_SESSION["email"]))
            {
                echo '<li class="nav-item">
                <a class="nav-link" style="color:white"  href="../pages/rezervacija.php">Rezervacija treninga</a>
                </li>';
                echo '<li class="nav-item">
                <a class="nav-link" style="color:white"  href="../handlers/logout.php">Logout</a>
                </li>';    
            }
            else if(isset($_SESSION["admin"]))
            {
                echo '<li class="nav-item">
                <a class="nav-link" style="color:white"  href="../pages/clanovi.php">Clanovi</a>
                </li>';
                echo '<li class="nav-item">
                <a class="nav-link" style="color:white"  href="../pages/rezervacijePregled.php">Rezervacije</a>
                </li>';
                echo '<li class="nav-item">
                <a class="nav-link" style="color:white"  href="../pages/kupovine.php">Kupovine</a>
                </li>';
                echo '<li class="nav-item">
                <a class="nav-link" style="color:white"  href="../pages/logout.php">Logout</a>
                </li>';   
            }
            else{
                echo '<li class="nav-item">
                <a class="nav-link" style="color:white"  href="../pages/registracija.php">Registracija</a>
                </li>';
                echo '<li class="nav-item">
                <a class="nav-link" style="color:white"  href="../pages/login.php">Login</a>
                </li>';             
            }
            ?>            
            <li class="nav-item">
                <a class="nav-link" style="color:white"  href="../pages/galerija.php">Galerija</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:white"  href="../pages/shop.php">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:white"  href="../pages/kontakt.php">Kontakt</a>
            </li>
      </li>
    </div>
        </ul>
        <ul class="navbar-nav sm-icons mr-0">
            <li class="nav-item"><a class="nav-link" style="color:white"  href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="nav-item"><a class="nav-link" style="color:white"  href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="nav-item"><a class="nav-link" style="color:white"  href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="nav-item"><a class="nav-link" style="color:white"  href="#"><i class="fab fa-pinterest-p"></i></a></li>
        </ul>
    </div>
</nav>
<div class="container-fluid boja">
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Kontaktirajte me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Kraljevo, Srbija</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Telefon: 062/123-321</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: vujovic@gmail.com</p>
    </div><br>
    <p>Posaljite mi poruku</p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  </div>
</div>
  <section class="footer-section bojapozadine">
        <div class="container teretana">
            <div class="row">
                <div class="col-lg-4">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="#"><img src="../images/logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                        <div class="fa-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa  fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Korisni linkovi</h4>
                        <ul>
                            <li><a href="./about.php">O nama</a></li>
                            <li><a href="./shop.php">Shop</a></li>
                            <li><a href="./registracija.php">Registracija</a></li>
                            <li><a href="./kontakt.php">Kontakt</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Podrska</h4>
                        <ul>
                            <li><a href="./galerija.php">Galerija</a></li>
                            <li><a href="./login.php">Login</a></li>
                            <li><a href="./shop.php">Shop</a></li>
                            <li><a href="./kontakt.php">Kontakt</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h4>Tips & Guides</h4>
                        <div class="fw-recent">
                            <h6><a href="#">Fitnes i teretana vam moze pomoci u borbi protv depresije i aneksioznosti</a></h6>
                            <ul>

                            </ul>
                        </div>
                        <div class="fw-recent">
                            <h6><a href="#">Fitness: Najbolje vezbanje za gubitak kilaze</a></h6>
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>