
<?php
include_once './db.php';
 
$ime=$_POST['username'];
$priimek=$_POST['priimek'];
$email = $_POST['email'];
$pass1 = $_POST['password_1'];
$pass2 = $_POST['password_2'];

  
if(!empty($email) && !empty($pass1))
{
      if($pass2 == $pass1)
      {
    $pass = sha1($pass1);
    $query = "INSERT INTO uporabniki (Ime, Priimek, Email, password) 
    VALUES ('$ime','$priimek','$email','$pass')";
    mysqli_query($db, $query);

    header("Location: ./login.php");
      }

      else 
      {
          echo 'Gesli nista enaki ponovno vpišite vse podatke';
         
      }
}  
   
else
{ 
  echo 'sumting';
   header("Location: register.php");
}








?>
<!--
/*
// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// REGISTER USER
if (isset($_POST['reg_users'])) {
   
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $priimek = mysqli_real_escape_string($db, $_POST['priimek']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM uporabniki WHERE Ime='$username' OR Email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO uporabniki (Ime, Priimek,Email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ./index.php');
  }
}
*/

-->














