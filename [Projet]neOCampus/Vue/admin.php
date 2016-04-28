<?php
	session_start();
	if ($_SESSION['Connexion'] != "ok") {
		header ("Location: ./login.php");
	}
	include '../Includes/header.php';
?>

			<!-- Banner -->
				<section id="banner">
					<h2>neOCampus</h2>
				</section>

			<!-- Main -->
				<section id="main" class="container 75%">
					<div class="box">
	
						<h2>Administrateur</h2>
						
						<div id="container">
							
							<center>
							
								<a href="./admin_upload.php"><button type='button' class='btn btn-default'>Upload Image</button></a>
								<a href="./admin_ajoutBatiment.php"><button type='button' class='btn btn-default'>Ajout Batiment</button></a></br>
							
							</center>

						</div>
						
					</div>
				</section>
				
<?php
	include '../Includes/footer.php';
?>