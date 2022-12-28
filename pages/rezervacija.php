<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Website/css/registracija.css">
    <link rel="stylesheet" href="/Website/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
  </head>
  <body>
    <?php
    include '../database/konekcija.php';
    $emailErr=$nameErr=$lozinkaErr=$telefonErr=$JMBG=$datumErr=$vremeErr="";
    $ime=$telefon=$name=$email=$jmbg="";
    $i=0;
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $imeprezime=$_POST["imeprezime"]; 
        $brojtelefona=$_POST["brojtelefona"];
        $program=$_POST["trening"];
        $email = $_REQUEST["email"];

        if (empty($_POST["imeprezime"])) {
            $nameErr = "Ime i prezime je obavezno";
          } else {
            $name = test_input($_POST["imeprezime"]);
            if (!preg_match("/^[a-z A-Z-' ]*$/",$name)) {
              $nameErr = "Ime i prezime nije u odgovarajucem formatu";
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

          if(preg_match('/^[0-9]{10}+$/',$_POST["brojtelefona"])) 
          {
              $i++;
          } 
          else 
          {
              $telefonErr = "Morate da unesete broj telefon";
          }

          if (empty($_POST["datum"])) {
            $datumErr = "Datum je obavezan";
          }
          else{
            $datum=test_input($_POST["datum"]);
            $i++;
          }

          if (empty($_POST["vreme"])) {
            $datumErr = "Vreme je obavezno";
          }
          else{
            $vreme=test_input($_POST["vreme"]);
            $i++;
          }
          if($email==$_SESSION["email"])
          {
            $i++;
            $mail=$_SESSION["email"];
            $JMBG=$_SESSION["jmbg"];
          }
          else
          {
            $i--;
            $emailErr="Greska u unosu mejla";
          }
          if($brojtelefona==$_SESSION['telefon'])
          {
            $i++;
            $tel=$_SESSION['telefon'];
          }
          else{
            $i--;
            $telefonErr="Greska u unosu broja telefona";
          }

          if($datum<date("Y-m-d"))
          {
            $i--;
            $datumErr="Datum rezervacije ne moze biti u proslosti";
          }
    }
    if($i==7)
    {
        $sql2 = "INSERT INTO rezervacija (imeprezime,brojtelefona,program,datum,vreme,email,jmbg)
        VALUES ('$imeprezime','$tel','$program','$datum','$vreme','$mail','$JMBG')";
        if ($conn->query($sql2) === TRUE)
        {
          echo '<script>alert(Uspesno ste zakazali trening)</script>';
            header("Location: ../index.php");
        }
        else
        {
            echo "Error:".$sql."<br>".$conn->error;
        }
    }
    
    ?>
  <?php include '../components/nav.php';?>  
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">
    
        <div class="d-flex align-items-center px-5 ms-xl-5 mt-5 pt-5">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

            <h3 class="fw-normal mb-3 pb-3">Rezervisi trening</h3>

            <div class="form-outline mb-4">
            <label class="form-label">Ime i prezime</label>
              <input type="text" name="imeprezime" class="form-control form-control-lg" /><?php echo $nameErr?>
            </div>
            <div class="form-outline mb-4">
            <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control form-control-lg" /><?php echo $emailErr?>   
            </div>
            <div class="form-outline mb-4">
            <label class="form-label">Broj telefona</label>
              <input type="text" name="brojtelefona" class="form-control form-control-lg" />
              <?php echo $telefonErr?>           
            </div>
            <div class="form-outline mb-4">
              <label class="form-label">Trening program</label>
              <select name="trening" id="tr">
                <option value="Samostalno vezbanje">Samostalno vezbanje</option>
                <option value="Vodjeni trening">Vodjenji trening</option>
                <option value="Personalni trening">Personalni trening sa trenerom</option>
                <option value="Funkcionalni trening">Funkcionalni trening</option>
                <option value="Pilates">Pilates</option>
                <option value="Mix Aerobic">Mix Aerobic</option>
              </select>
            </div>
            <div class="row"> 
                <div class="form-outline mb-4 col-sm-6">
                  <label class="form-label">Datum</label>
                  <input type="date" name="datum" class="form-control form-control-lg" />
                  <?php echo $datumErr?>        
                </div>
                <div class="form-outline mb-4 col-sm-6">
                <label class="form-label">Vreme</label>
                <input type="time" name="vreme" class="form-control form-control-lg" />
                <?php echo $vremeErr?>        
              </div>
            </div>
            <div class="pt-1 mb-4">
            <input type="submit" value="Rezervisi" class="submit" name="submit" id="submit" />
            </div>

          </form>
         </div>
      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="../images/image.jpg" alt="Login image" class="bg-image-vertical pozadinalogin">
      </div>
    </div>
</div>
<?php include '../components/sectionfooter.php';?>  


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>