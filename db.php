<?php
session_start();

$db = mysqli_connect('localhost', 'root', 'geslo123', 'spletnaucilnica');
mysqli_query($db, "SET NAMES 'utf8'");
$salt = 'abc123def235';
 
?>
