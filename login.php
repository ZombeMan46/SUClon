<?php include('db.php') ?>
<?php require_once('config.php') ?>
<?php
$redirectTO = "http://localhost/suclon/callback.php";
$data = ['email'];
$fullurl = $handler ->getLoginUrl($redirectTO, $data);
?>
?>
<!DOCTYPE html>
<html>
<head>
		<title>Login </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
    </head>
    
<body class="subpage">
<?php include_once 'header.php'; ?>

  <div class="header">
  	<h2>Login za dijake</h2>
  </div>
	 
  <form method="post" action="login_check.php">
  	<?php// include('errors.php'); ?>
  	<div class="input-group">
  		<label>Email</label>
  		<input type="text" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
	  <div class="input-group"> 
  		<input type="button" onclick="window.location = '<?php echo $fullurl ?>'" value="Login with fb" class="btn btn-primary">
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <?php include_once 'footer.php'; ?>
</body>
</html>