<?php
	session_start();
	if ($_SESSION['Connexion'] != "ok") {
		header ("Location: ./login.php");
	}
	include '../Includes/headerAdmin.php';
?>

			<!-- Banner -->
				<section id="banner">
					<h2>neOCampus</h2>
				</section>

			<!-- Main -->
				<section id="main" class="container 75%">
					
					<div class="box">
	
						<h2>Administrateur - Ajout nouveau Batiment</h2>
						
						<div id="container">
							
							Cliquez sur la map pour l'ajout d'un bâtiment :
							<div id="map"></div>
								
						</div>
						
					</div>
					
				</section>
				
<?php
	include '../Includes/footer.php';
?>