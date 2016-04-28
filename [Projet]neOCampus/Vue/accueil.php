<?php
	include '../Includes/header.php';
?>

			<!-- Banner -->
				<section id="banner">
					<h2>neOCampus</h2>
					<p>DÉMONSTRATEUR DE CAMPUS CONNECTÉ, INNOVANT, INTELLIGENT, DURABLE.</p>
					<ul class="actions">
						<?php
							if ($_SESSION['Connexion'] != "ok") {
								echo "<li><a href='./signup.php' class='button special'>Inscription</a></li>";
							} else {
								echo "<li><a href='./admin.php' class='button special'>Administration</a></li>";
							}
						?>
						<li><a href="./visualisation_campus.php" class="button">Visualiser</a></li>
					</ul>
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>neOCampus,
							<br/>
							Le projet de demain</h2>
							<p>L’opération neOCampus a été initiée en juin 2013 par le président de l’Université Paul Sabatier (UPS), Bertrand Monthubert, et comporte actuellement 10 laboratoires de l’UPS : CESBIO,  CIRIMAT, ECOLAB, IRIT, LAAS, LAPLACE, LCC, LERASS, LMDC, PHASE.  Ces laboratoires ont pour objectif de croiser leurs compétences  pour améliorer le confort au quotidien pour la communauté universitaire tout en diminuant l’empreinte écologique des bâtiments et en réduisant les coûts de fonctionnement (fluide, eau, électricité...).</p>
						</header>
						<span class="image featured"><img src="images/ups_connecte.png" alt="" /></span>
					</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								<span class="icon major fa-bolt accent2"></span>
								<h3>Magna etiam</h3>
								<p>L'opération de recherche supportée par neOCampus a pour objet de concevoir les produits et services associés aux systèmes ambiants. L’équipement de neOCampus consiste en de nombreux dispositifs logiciels et matériels interconnectés pour le campus numérique de demain, durable et intelligent alliant matériels pédagogiques innovants, capteurs, systèmes de stockage, de localisation, de simulation et des matériaux innovants au sein de bâtiments universitaires et du campus pour augmenter la qualité de vie des usagers et réduire les consommations de fluides.</p>
							</section>
							<section>
								<span class="icon major fa-area-chart accent3"></span>
								<h3>Ipsum dolor</h3>
								<p>L'opération de recherche supportée par neOCampus a pour objet de concevoir les produits et services associés aux systèmes ambiants. L’équipement de neOCampus consiste en de nombreux dispositifs logiciels et matériels interconnectés pour le campus numérique de demain, durable et intelligent alliant matériels pédagogiques innovants, capteurs, systèmes de stockage, de localisation, de simulation et des matériaux innovants au sein de bâtiments universitaires et du campus pour augmenter la qualité de vie des usagers et réduire les consommations de fluides.</p>
							</section>
						</div>
						<div class="features-row">
							<section>
								<span class="icon major fa-cloud accent4"></span>
								<h3>Sed feugiat</h3>
								<p>L'opération de recherche supportée par neOCampus a pour objet de concevoir les produits et services associés aux systèmes ambiants. L’équipement de neOCampus consiste en de nombreux dispositifs logiciels et matériels interconnectés pour le campus numérique de demain, durable et intelligent alliant matériels pédagogiques innovants, capteurs, systèmes de stockage, de localisation, de simulation et des matériaux innovants au sein de bâtiments universitaires et du campus pour augmenter la qualité de vie des usagers et réduire les consommations de fluides.</p>
							</section>
							<section>
								<span class="icon major fa-lock accent5"></span>
								<h3>Enim phasellus</h3>
								<p>L'opération de recherche supportée par neOCampus a pour objet de concevoir les produits et services associés aux systèmes ambiants. L’équipement de neOCampus consiste en de nombreux dispositifs logiciels et matériels interconnectés pour le campus numérique de demain, durable et intelligent alliant matériels pédagogiques innovants, capteurs, systèmes de stockage, de localisation, de simulation et des matériaux innovants au sein de bâtiments universitaires et du campus pour augmenter la qualité de vie des usagers et réduire les consommations de fluides.</p>
							</section>
						</div>
					</section>

				</section>
								
<?php
	include '../Includes/footer.php';
?>