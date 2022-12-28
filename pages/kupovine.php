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
    <link rel="stylesheet" href="/Website/css/login.css">
  </head>
  <body>
    <?php
    include "../database/konekcija.php";
    ?>
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
<section class="clanovi">
    <table>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Naziv proizvoda</th>
                <th>Cena</th>
                <th>Kolicina</th>
                <th>Ukupna cena</th>
                <th>JMBG</th>               
                <th>Datum kupovine</th>
            </tr>
            <?php
            $i=0;
            $sql = "SELECT id,email,NazivProizvoda,cena,kolicina,ukupnacena,jmbg,reg_date FROM kupovina";
            $result = $conn->query($sql);
                while($row = mysqli_fetch_assoc($result))
                {
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['NazivProizvoda'];?></td>
                <td><?php echo $row['cena'];?></td>
                <td><?php echo $row['kolicina'];?></td>
                <td><?php echo $row['ukupnacena'];?></td>
                <td><?php echo $row['jmbg'];?></td>
                <td><?php echo $row['reg_date'];?></td>
            </tr>
            <?php
            $i++;
            }
            $conn->close();
            ?>
    </table>
</section>
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
  </body>
</html>