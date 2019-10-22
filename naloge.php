//Vpišemo na strani moduli datoteke kot so naloge
<?php include('db.php') ?>
<?php require_once('config.php') ?>
<!DOCTYPE html>
<html>
<head>
		<title> Naloge </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
    </head>
    
    <?php
$query = ("SELECT Ime,opis,id FROM moduli ORDER BY id DESC");
$result = mysqli_query($db,$query); 
?>


<!-- do php -->
  <h2> Naredi novo nalogo: </h2>
     <form method="post" action="upload.php" enctype="multipart/form-data">
     <div class="input-group"> 
  		<label>Modul: </label>
          <select>
          <?php
while($obj=mysqli_fetch_array($result))
{
    $obj['id'] = $id_select;
    echo '<option value=" '.$obj['id'].' "> '.$obj['Ime'].' </option>';
} 
?>
</select>
  	
  	</div>
      <div class="input-group">
  		<label>Ime</label>
  		<input type="text" name="ImeNaloge" >
  	</div>
  	<div class="input-group">
  		<label>Opis</label>
        <textarea name="opis" id="opis"></textarea>
  	</div>
      <div class="input-group">
      Naloži datoteko:
    <input type="file" name="fileToUpload" id="fileToUpload">
    </div>
  	<div class="input-group">
  		<button type="submit" class="button special fit" name="crt_mod">Ustvari</button>
  	</div>
      
  </form>

  <!-- do php -->
<form action="upload.php" method="post" enctype="multipart/form-data">
    
</form>

</body>
</html>

  <?php include_once 'footer.php'; ?>
</body>
</html>