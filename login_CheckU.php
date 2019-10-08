<?php
include_once 'db.php';

$email = $_POST['email'];
$pass = $_POST['password'];

$pass = sha1($pass);

$query = sprintf("SELECT * FROM ucitelji WHERE email='$email' AND password='$pass'",mysqli_real_escape_string($db, $email));

$result = mysqli_query($db, $query);

if(mysqli_num_rows($result) == 1)
{
    $_SESSION['loggedin'] = true;
    $_SESSION['username']= $email;
    
    $uporabnik = mysqli_fetch_array($result);
    $_SESSION['user_id'] = $uporabnik['id'];
    header("Location: index.php");
}
else
{
    header("Location: ./register.php");
}

?>