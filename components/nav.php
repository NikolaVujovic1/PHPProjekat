<nav class="navbar navbar-expand-lg navbar-light boja">
    <a class="navbar-brand" href="#"><img src="/Website/images/logo.png" class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbarToggler10"
        aria-controls="myNavbarToggler10" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbarToggler10">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" style="color:white" href="/Website/index.php">Pocetna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:white"  href="Website/pages/about.php">O nama</a>
            </li>
            <?php
            if(isset($_SESSION["email"]))
            {
                echo '<li class="nav-item">
                <a class="nav-link" style="color:white"  href="/Website/pages/rezervacija.php">Rezervacija treninga</a>
                </li>';
                echo '<li class="nav-item">
                <a class="nav-link" style="color:white"  href="/Website/handlers/logout.php">Logout</a>
                </li>';    
            }
            else if(isset($_SESSION["admin"]))
            {
                echo '<li class="nav-item">
                <a class="nav-link" style="color:white"  href="/Website/pages/clanovi.php">Clanovi</a>
                </li>';
                echo '<li class="nav-item">
                <a class="nav-link" style="color:white"  href="/Website/pages/rezervacijePregled.php">Rezervacije</a>
                </li>';
                echo '<li class="nav-item">
                <a class="nav-link" style="color:white"  href="/Website/pages/kupovine.php">Kupovine</a>
                </li>';
                echo '<li class="nav-item">
                <a class="nav-link" style="color:white"  href="/Website/pages/logout.php">Logout</a>
                </li>';   
            }
            else{
                echo '<li class="nav-item">
                <a class="nav-link" style="color:white"  href="/Website/pages/registracija.php">Registracija</a>
                </li>';
                echo '<li class="nav-item">
                <a class="nav-link" style="color:white"  href="/Website/pages/login.php">Login</a>
                </li>';             
            }
            ?>            
            <li class="nav-item">
                <a class="nav-link" style="color:white"  href="/Website/pages/galerija.php">Galerija</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:white"  href="/Website/pages/shop.php">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:white"  href="/Website/pages/kontakt.php">Kontakt</a>
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