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
	  <h3> <?php $_SESSION['username'] ?>  </h3>
  </div>
	 
  <form method="post" action="login_check.php">
  	<?php// include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <?php include_once 'footer.php'; ?>
</body>
</html>