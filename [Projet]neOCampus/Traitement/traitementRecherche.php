<?php 
	include '../Includes/header.php';
?>

			<!-- Banner -->
				<section id="banner">
					<h2>neOCampus</h2>
				</section>

			<!-- Message Contact -->
				<section id="main" class="container">
					<div class="box">
						<div class="container">

							<h2>Recherche</h2>
							
							<?php
								$var = $_POST['motCle'];
								echo "Vous avez fait une recherche pour \"$var\"";
							?>
							
						</div>
					</div>
				</section>
	
<?php
	include '../Includes/footer.php';
?>