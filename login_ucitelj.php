<?php include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
		<title>Učitelj login </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
    </head>
    
<body class="subpage">
<?php include_once 'header.php'; ?>

  <div class="header">
  	<h2>Login za profesorje</h2>
	  <h3>  </h3>
  </div>
	 
  <form method="post" action="login_CheckU.php">
  	<?php// include('errors.php'); ?>
  	<div class="6u 12u$(xsmall)" style="display: block; margin: 0 auto;">
  		<label>Email</label>
  		<input type="text" name="email" >
  	</div>
  	<div class="6u 12u$(xsmall)" style="display: block; margin: 0 auto;">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
	  <br>
  	<div class="input-group">
  		<button type="submit" class="button special" name="login_user" style="display: block; margin: 0 auto;">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <?php include_once 'footer.php'; ?>
</body>
</html>