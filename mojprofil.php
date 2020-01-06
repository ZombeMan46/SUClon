<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Moj Profil</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">


	<?php
	include_once 'db.php';
	include_once 'header.php';
	?>


	<!-- Dodaj da lahko izbira samo eno na enkrat. v primeru zamenjave gesla, 
	lahko to naredi samo, če ve trenutno geslo. Spremenitev maila mogoča samo z izpolitvijo
	obrazca za pošiljanje k adminu -->
	
	<form method="post" action="user_cng.php">
		<!-- trenutni pass -->
	<div class="6u 12u$(xsmall)" style="display: block; margin: 0 auto;">
  	  <label>Staro geslo</label>
  	  <input type="password" name="password_1" >
	  </div>
	  <br>
	  <br>
	  <!-- novi pass ter confirm -->
  	<div class="6u 12u$(xsmall)" style="display: block; margin: 0 auto;">
  	  <label>Novo geslo</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="6u 12u$(xsmall)" style="display: block; margin: 0 auto;">
  	  <label>Potrdite novo geslo</label>
  	  <input type="password" name="password_3" >
	  </div>
	  
	  <div class="6u 12u$(xsmall)" style="display: block; margin: 0 auto;">
  	  <button type="submit" class="button special" name="usr_cng" style="display: block; margin: 0 auto;">Uredi</button>
  	</div>
	</form>

	<?php
	include_once 'footer.php';
	?>
	</body>
</html>