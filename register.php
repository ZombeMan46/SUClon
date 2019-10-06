<?php   include_once 'db.php';
 ?>
<html>
<head>
		<title>Register </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
<body class="subpage">
    <?php
	include_once 'header.php';
    ?>
     <div class="header">
  	<h2>Register</h2>
  </div>
<form method="post" action="reg_user.php">
  	<div class="input-group">
  	  <label>Ime</label>
  	  <input type="text" name="username" value="">
      </div>

      <div class="input-group">
  	    <label>Priimek</label>
  	    <input type="text" name="priimek" value="">
      </div>
      
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_users">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>

<?php
include_once 'footer.php';
?>


 