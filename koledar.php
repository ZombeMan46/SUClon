<!DOCTYPE HTML>
<html>
    <head>
		<title>Koledar   </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="celendar.css" type="text/css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
<body class="subpage">

    <?php 
    include_once 'header.php' ;
    ?>

    <?php
    include 'celendar.php';
 
$calendar = new Calendar();
 
echo $calendar->show();
?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include_once 'footer.php' ?> 
    </body>
        </html>