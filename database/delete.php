<?php
include '../database/konekcija.php';
$sql = "DELETE FROM registracija WHERE jmbg='" . $_GET["jmbg"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>