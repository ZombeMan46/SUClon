<?php include('db.php') ?>
<?php require_once('config.php') ?>
<!DOCTYPE html>
<html>
<head>
		<title> Moduli </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
    </head>
    
<body class="subpage">
<?php include_once 'header.php'; ?>

  <div class="header">
  	<h2>Obstoječi moduli:</h2>
  </div>

<?php
$query = ("SELECT Ime,opis,id FROM moduli ORDER BY id DESC");
$result = mysqli_query($db,$query); 
?>
<?php
while($obj=mysqli_fetch_array($result))
{
    echo "<table style='width:100%'";
    echo "<tr>";
    echo $obj['Ime'];
    echo "</tr>";;
    echo "<tr>";
    echo "   ";
    echo $obj['opis'];
    echo "</tr>";
}

?>



     <h2> Naredi nov modul: </h2>
     <form method="post" action="crt_modul.php">
  	<div class="input-group">
  		<label>Ime</label>
  		<input type="text" name="imemod" >
  	</div>
  	<div class="input-group">
  		<label>Opis</label>
  		<input type="text" name="opis">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="button special fit" name="crt_mod">Ustvari</button>
  	</div>
  </form>
  <?php include_once 'footer.php'; ?>
</body>
</html>