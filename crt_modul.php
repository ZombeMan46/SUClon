<?php
include_once "db.php";
?>
<?php
$ime = $_POST['imemod'];
$opis = $_POST['opis'];


$query = "INSERT INTO moduli (Ime,opis) 
VALUES ('$ime','$opis')";
if (mysqli_query($db, $query)) {
    echo "New record created successfully";
    sleep(5);
    header("Location: ./moduli.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
}


?>
