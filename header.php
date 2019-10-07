<!-- Header -->
<?php include_once 'db.php'; ?> 
        <header id="header">
				<div class="inner">
					<a href="index.php" class="logo">Spletna Učilnica</a>
					<nav id="nav">
					<?php
					if(isset($_SESSION['username'])){
						echo '<a href="koledar.php">Koledar</a>';
					}
					else if( isset($_SESSION['userData']['email'])){
						echo '<a href="koledar.php">Koledar</a>';		
					}
						?>
					<?php
					if(isset($_SESSION['username'])){
						echo '<a href="mojipredmeti.php">Moji Predmeti</a>';
					}
					else if(isset($_SESSION['userData']['email'])){
						echo '<a href="mojipredmeti.php">Moji Predmeti</a>';
					
				}
						?>

					<?php
					if(isset($_SESSION['username'])){
						echo	'<a href="mojprofil.php">Moj Profil</a>';
					}
					else if(isset($_SESSION['userData']['email'])){
					echo	'<a href="mojprofil.php">Moj Profil</a>';
					}
				
					?>
						<!-- dodaj, če je logiran da mu da to stran --> 
						<?php
						if(!isset($_SESSION['username']) and !isset($_SESSION['userData']['email'])){
							echo '<a href="register.php">Register</a>';
						}
						/*
						else if(!isset($_SESSION['userData']['email'])){
						echo '<a href="register.php">Register</a>';
						}*/
					
						?>
						<?php
						if(!isset($_SESSION['username']) and !isset($_SESSION['userData']['email']) ){
							echo '<a href="login.php">Login user</a>';
						}
	
						?>
						<?php
						if(!isset($_SESSION['username']) and !isset($_SESSION['userData']['email'])){
						echo '<a href="login_ucitelj.php">Login ucitelj</a>';
						}
						?>
						<?php
						if(isset($_SESSION['username']) || isset($_SESSION['userData']['email'])){
						echo '<a href="logout.php">Odjava</a>';
						}
						?>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>	
			</header>