<?php
session_start()
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
  </head>
  <body>
    <?php
    include '../database/konekcija.php';
    $emailErr=$lozinkaErr=$greska=$jmbg="";
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        
        if(empty($_POST["lozinka"]))
        {
            $lozinkaErr="Morate uneti lozinku";
        }
        else if(empty($_POST["email"]))
        {
           $emailErr="Morate uneti email";
        }
        
        else
        {
        $email = test_input($_POST["email"]);
        $lozinka = test_input($_POST["lozinka"]);
        $result = $conn->query("SELECT * FROM admin");
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($rows as $row) {
                if(($row['email'] == $email) && ($row['lozinka'] == $lozinka)) {
                    $_SESSION["admin"]=$_POST["email"];
                }
                else {
                    $sql = "SELECT * FROM registracija";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        if(($_POST["email"]==$row["email"])&&($_POST["lozinka"]==$row["lozinka"]))
                        {
                            header("Location: ../index.php");
                            $_SESSION["email"]=$_POST["email"];
                            $_SESSION["lozinka"]=$_POST["lozinka"];
                            $jmbg=$row['jmbg'];
                            $_SESSION['jmbg'] = $jmbg;
                            $brtel=$row['telefon'];
                            $_SESSION['telefon']=$brtel;
                        }
                        else
                        {
                            $greska="Email ili lozinka nisu uneti ispravno";
                        }
                }
            }
        }
    }
}
     
    ?>
 <?php include '../components/nav.php';?>  
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">
<div class="container">
        <div class="grid">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <h3 class="fw-normal mb-3 pb-3">Log in</h3>

            <div class="form-outline mb-4">
              <input type="email" name="email" class="form-control form-control-lg" /><?php echo $emailErr?>
              <label class="form-label" for="form2Example18">Email adresa</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="lozinka" class="form-control form-control-lg" /><?php echo $lozinkaErr?>
              <label class="form-label">Lozinka</label>
            </div>
            <?php echo $greska?>

            <div class="pt-1 mb-4">
            <input type="submit" value="Uloguj se" class="submit" name="submit" id="submit" />
            </div>
            <p>Nemate nalog? <a href="./registracija.php" class="link-warning">Registrujte se ovde</a></p>

          </form>
         </div>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
</body>
</html>