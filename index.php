<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Spletna Učilnica </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>

	<body>
        <?php
		 include_once 'header.php';
        ?>
		<!-- Banner -->
			<section id="banner">
				<h1>Dobrodošji v šolsko leto: 2019/2020 </h1>
				<p>Učilnica za dijake od dijaka</p>
			</section>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner">
					<div class="flex flex-3">
						<article>
							<header>
								<h3>Predmeti pri katerih sodelujem<br /> </h3>
							</header>
							<p>Klikni na gumb "več", da izveš pri katerih predmetih sodeluješ.</p>
							<footer>
								<a href="mojipredmeti.php" class="button special">More</a>
							</footer>
						</article>
						<article>
							<header>
								<h3>Spremeni nastavitve profila<br />Zadnja sprememba:</h3>
							</header>
							<p>Klikni "Več" ter stran te bo popeljala do urejevalnika profila, tu lahko urediš svoje geslo, sliko, ...  </p>
							<footer>
								<a href="mojprofil.php" class="button special">More</a>
							</footer>
						</article>
						<article>
							<header>
								<h3>Piši administratorju za dostop do predmetov<br /></h3>
							</header>
							<p>Klikni "Več", in stran te bo popeljala do obrazcov, na katerih lahko sporočite administratorju, kam vas naj doda</p>
							<footer>
								<a href="#" class="button special">More</a>
							</footer>
						</article>
					</div>
				</div>
			</section>

		<!-- Two -->

		<!-- naredi, da se prikažejo samo učitelji, ki te imajo v nekem predmetu   -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<header>
						<h2>Profesorji</h2>
						<p>Seznam vseh profesorjev, katere imaš v modulu</p>
					</header>
					<div class="flex flex-4">
						<div class="box person">
							<div class="image round">
								<!-- dodaj sliko od učitelja v bazi je to - ucitelji/slike -->
								<img src="images/pic03.jpg" alt="Person 1" />
							</div>
							<h3>Magna</h3>
							<p>Cipdum dolor</p>
						</div>
						<div class="box person">
							<div class="image round">
								<img src="images/pic04.jpg" alt="Person 2" />
							</div>
							<h3>Ipsum</h3>
							<p>Vestibulum comm</p>
						</div>
						<div class="box person">
							<div class="image round">
								<img src="images/pic05.jpg" alt="Person 3" />
							</div>
							<h3>Tempus</h3>
							<p>Fusce pellentes</p>
						</div>
						<div class="box person">
							<div class="image round">
								<img src="images/pic06.jpg" alt="Person 4" />
							</div>
							<h3>Dolore</h3>
							<p>Praesent placer</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Three -->
		<!--
			<section id="three" class="wrapper special">
				<div class="inner">
					<header class="align-center">
						<h2>Nunc Dignissim</h2>
						<p>Aliquam erat volutpat nam dui </p>
					</header>
					<div class="flex flex-2">
						<article>
							<div class="image fit">
								<img src="images/pic01.jpg" alt="Pic 01" />
							</div>
							<header>
								<h3>Praesent placerat magna</h3>
							</header>
							<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor lorem ipsum.</p>
							<footer>
								<a href="#" class="button special">More</a>
							</footer>
						</article>
						<article>
							<div class="image fit">
								<img src="images/pic02.jpg" alt="Pic 02" />
							</div>
							<header>
								<h3>Fusce pellentesque tempus</h3>
							</header>
							<p>Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna non comodo sodales tempus.</p>
							<footer>
								<a href="#" class="button special">More</a>
							</footer>
						</article>
					</div>
				</div>
			</section>
		--> 

	<?php	
   include_once 'footer.php'
   ?>

   
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>