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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
  </head>
  <body class="bodi">
    <?php
    include "../database/konekcija.php";
    ?>
    <?php include './components/nav.php';?>  
<section class="clanovi">
    <table>
            <tr>
                <th>JMBG</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Email</th>
                <th>Pol</th>
                <th>Telefon</th>
                <th>Visina</th>
                <th>Kilaza</th>
                <th>Datum registracije</th>
            </tr>
            <?php
            $i=0;
            $sql = "SELECT jmbg,ime,prezime,email,pol,telefon,visina,kilaza,reg_date FROM registracija";
            $result = $conn->query($sql);
                while($row = mysqli_fetch_assoc($result))
                {
            ?>
            <tr>
                <td><?php echo $row['jmbg'];?></td>
                <td><?php echo $row['ime'];?></td>
                <td><?php echo $row['prezime'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['pol'];?></td>
                <td><?php echo $row['telefon'];?></td>
                <td><?php echo $row['visina'];?></td>
                <td><?php echo $row['kilaza'];?></td>
                <td><?php echo $row['reg_date'];?></td>
                <td><a href="../handlers/delete.php?jmbg=<?php echo $row["jmbg"]; ?>">Delete</a></td>
            </tr>
            <?php
            $i++;
            }
            $conn->close();
            ?>
    </table>
</section>
<?php include './components/sectionfooter.php';?>  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  </body>
</html>
