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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">  
  </head>
  <body>
  <?php
  include '../database/konekcija.php';
     $i=0;
     $nameErr = $emailErr = $genderErr = $websiteErr = $fornameErr = $passwordErr = $cpasswordErr= $kilazaErr=$polErr=$telefonErr=$visinaErr =$jmbgErr= "";
     $name = $email = $pol = $comment = $website = $forname = $password = $cpassword =$pol=$kilaza=$visina=$jmbg="";
     
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ime=$_POST["name"];
        $prezime=$_POST["prezime"];
        $email=$_POST["email"];
        $lozinka=$_POST["lozinka"];
        $telefon=$_POST["brojtelefona"];
        $visina=$_POST["visina"];
        $kilaza=$_POST["kilaza"];
        $jmbg=$_POST["jmbg"];
       if (empty($_POST["name"])) {
         $nameErr = "Ime je obavezno";
       } else {
         $name = test_input($_POST["name"]);
         if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
           $nameErr = "Ime nije u odgovarajucem formatu";
         }
         else{
            $i++;
         }
       }
     
       if (empty($_POST["prezime"])) {
         $fornameErr = "Prezime je obavezno";
       } else {
         $forname = test_input($_POST["prezime"]);
         if (!preg_match("/^[a-zA-Z-' ]*$/",$forname)) {
           $fornameErr = "Prezime nije u odgovarajucem formatu";
         }
         else{
            $i++;
         }
       } 
       if (empty($_POST["email"])) {
         $emailErr = "Email je obavezan";
       } else {
         $email = test_input($_POST["email"]);
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $emailErr = "Email nije u odgovarajucem format";
         }
         else{
            $i++;
         }
       }

       if(preg_match('/^(0[1-9]|[12][0-9]|3[01])(0[1-9]|1[012])[0-9]{9}$/', $_POST["jmbg"]))
            {
                $i++;
                $_SESSION["jmbg"]=$jmbg;
            } 
            else
            {
                $jmbgErr = "Morate da unesete jmbg";
            }
     
       if(!empty($_POST["lozinka"]) && ($_POST["lozinka"] == $_POST["ponovljenalozinka"])&&!empty($_POST["ponovljenalozinka"])) {
         $password = test_input($_POST["lozinka"]);
         $cpassword = test_input($_POST["ponovljenalozinka"]);
         if (strlen($_POST["lozinka"]) <= '8') {
             $passwordErr = "Sifra mora da sadrzi najmanje 8 karaktera";
         }
         else if(!preg_match("#[0-9]+#",$password)) {
             $passwordErr = "Lozinka mora da sadrzi bar jedan broj!";
         }
         else if(!preg_match("#[A-Z]+#",$password)) {
             $passwordErr = "Lozinka mora da sadrzi bar jedno veliko slovo";
         }
         else if(!preg_match("#[a-z]+#",$password)) {
             $passwordErr = "Lozinka mora da sadrzi bar jedno malo slovo";
         }
         else if(!preg_match("#[a-z]+#",$cpassword)) {
            $passwordErr = "Ponovljena lozinka mora da sadrzi bar jedno malo slovo";
        } 
        else if(!preg_match("#[a-z]+#",$cpassword)) {
            $passwordErr = "Ponovljena lozinka mora da sadrzi bar jedno malo slovo";
        } 
        else if(!preg_match("#[a-z]+#",$cpassword)) {
            $passwordErr = "Ponovljena lozinka mora da sadrzi bar jedno malo slovo";
        } 
        else if(!preg_match("#[a-z]+#",$cpassword)) {
            $passwordErr = "Ponovljena lozinka mora da sadrzi bar jedno malo slovo";
        }  else {
            $i++;
         }
    }
    if(empty($_POST["lozinka"]))
    {
        $passwordErr="Morate uneti lozinku";
    }
    if(empty($_POST["ponovljenalozinka"]))
    {
        $cpasswordErr="Morate ponoviti lozinku";
    }

    if(!preg_match('/^[0-9]{10}+$/', $telefon))
    {
        $telefonErr = "Morate da unesete broj telefon";
        
    } 
    else 
    {
        $i++;
    }
     
       if (empty($_POST["pol"])) {
         $polErr = "Morate cekirati pol";
       } else {
         $pol = test_input($_POST["pol"]);
         $i++;
       }
       if (empty($_POST["kilaza"])) {
        $kilazaErr = "Morate uneti kilazu";
      } else {
        $kilaza = test_input($_POST["kilaza"]);
        $i++;
      }
      if (empty($_POST["visina"])) {
        $visinaErr = "Morate uneti visinu";
      } else {
        $visina = test_input($_POST["visina"]);
        $i++;
      }
      
      
    $sql2 = "SELECT * FROM registracija";
    $result = $conn->query($sql2);
    while ($row = $result->fetch_assoc()) {
        if($_POST["brojtelefona"]==$row["telefon"])
        {
            $telefonErr="Broj telefona vec postoji";
            $i--;
        }
        if($_POST["email"]==$row["email"])
        {
            $emailErr = "Email vec postoji";
            $i--;
        }
        if($_POST["jmbg"]==$row["jmbg"])
        {
            $jmbgErr="JMBG vec postoji";
            $i--;
        }
      }
    }
     if($i==8)
     {       
        $sql = "INSERT INTO registracija (jmbg,ime,prezime,email,lozinka,pol,telefon,visina,kilaza) VALUES ('$jmbg','$ime','$prezime','$email','$lozinka','$pol','$telefon','$visina','$kilaza')";
        if ($conn->query($sql) === TRUE)
        {
            header("Location: ./login.php");
        }
        else
        {
            echo "Error:".$sql."<br>".$conn->error;
        }
     }
     
     function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
     }
    ?>
    <?php include '../components/nav.php';?>                                                       
<div class="container-fluid">
<div class="row">
      <div class="col-sm-6 text-black gridd">
      <div class="d-flex align-items-center px-5 ms-xl-5 mt-5 pt-5">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="register-form navbarslova" id="register-form">
                       <h3 class="mb-3 pb-3 tekst2">Registruj se</h3>
                           <div class="form-outline mb-4">
                                <label for="ime" class="tekst2">Ime:</label>
                                <input type="text" class="form-control form-control-lg" name="name"/><?php echo $nameErr;?>
                            </div>
                            <div class="form-outline mb-4">
                                <label for="prezime" class="tekst2">Prezime :</label>
                                <input type="text" class="form-control form-control-lg" name="prezime"/><?php echo $fornameErr; ?>
                            </div>
                            <div class="form-outline mb-4">
                            <label for="gender" class="radio-label tekst2">Pol :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="pol" value="muski" id="male">
                                <label for="male" class="tekst2">Muski</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" value="zenski" name="pol" id="female">
                                <label for="female" class="tekst2">Zenski</label><?php echo $polErr; ?>
                                <span class="check"></span>
                            </div>
                        </div>
                        </div>
                        <div class="form-outline mb-4">
                            <label for="email">Email :</label>
                            <input type="text" class="form-control form-control-lg" name="email" id="email"/><?php echo $emailErr; ?>
                        </div>
                        <div class="form-outline mb-4">
                            <label for="email">Lozinka :</label>
                            <input type="password" class="form-control form-control-lg" name="lozinka" id="lozinka"/><?php echo $passwordErr; ?>
                        </div>
                        <div class="form-outline mb-4">
                            <label for="email">Ponovljena lozinka:</label>
                            <input type="password" class="form-control form-control-lg" name="ponovljenalozinka"/><?php echo $cpasswordErr; ?>
                        </div>
                        <div class="form-outline mb-4">
                            <label for="text">Kontakt telefon :</label>
                            <input type="text" class="form-control form-control-lg" name="brojtelefona"/><?php echo $telefonErr; ?>
                        </div>
                        <div class="form-outline mb-4">
                            <label for="text">Visina :</label>
                            <input type="number" class="form-control form-control-lg" name="visina"/><?php echo $visinaErr; ?>
                        </div>
                        <div class="form-outline mb-4">
                            <label for="text">Kilaza :</label>
                            <input type="number" class="form-control form-control-lg" name="kilaza"/><?php echo $kilazaErr; ?>
                        </div>
                        <div class="form-outline mb-4">
                            <label for="text">JMBG :</label>
                            <input type="text" class="form-control form-control-lg" name="jmbg"/><?php echo $jmbgErr; ?>
                        </div>
                        <div class="pt-1 mb-4">
                            <input type="submit" value="Registruj se" class="submit" name="submit" id="submit" />
                        </div>
                        
                    </form>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="../images/image.jpg"class="bg-image-vertical pozadinalogin">
        </div>
    </div>
</div>
<?php include '../components/sectionfooter.php';?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
</body>
</html>