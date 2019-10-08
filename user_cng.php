<?php
include_once 'db.php';
if(isset($_POST['usr_cng']))
{
$email = $_SESSION['username'];
$pass1 = $_POST['password_1'];
$pass2 = $_POST['password_2'];
$pass3 = $_POST['password_3'];
//sha1 kriptiramo gesla
$pass1 = sha1($pass1);
$pass2 = sha1($pass2);
$pass3 = sha1($pass3);
//poiščemo od uporabnika geslo
$sqli = ("SELECT * FROM uporabniki WHERE Email='$email'");
$query = mysqli_query($db, $sqli);
$chg_pwd1=mysqli_fetch_array($query);
$passchk = $chg_pwd1['password'];


if($passchk==$pass1){
if($pass2==$pass3){
    $update_pwd=mysqli_query($db,"UPDATE uporabniki SET password='$pass2' WHERE Email='$email'");
  echo  mysqli_error($db);
  echo $pass1;
  echo $email;
    echo "<script>alert('Update Sucessfully')</script>";
}
else{
    echo "<script>alert('Your new and Retype Password is not match'); window.location='mojprofil.php'</script>";
}
}
else
{
echo "<script>alert('Your old password is wrong'); window.location='mojprofil.php'</script>";
}
}
//prečekiramo če sta gesli enaki, nato izvedemo spremembo

?>
