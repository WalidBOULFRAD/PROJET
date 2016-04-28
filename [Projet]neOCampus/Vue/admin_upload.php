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
	
						<h2>Administrateur - Upload Image Plan</h2>
						
						<div id="container"> 
									
									<?php
										echo "<form action='../Traitement/traitementUpload.php' method='post' enctype='multipart/form-data'>
										
											<div>
												<input type='radio' id='Batiment' name='type' value = 'Batiment'>
												<label for='Batiment'>Batiment</label>
											</div>
											<div>
												<input type='radio' id='Piece' name='type' value = 'Piece'>
												<label for='Piece'>Piece</label>
											</div>
												
											<input type = 'file' id = 'photo' name ='photo'>
											<button type = 'submit' class = 'btn btn-default' name = 'submit'>Envoyer</button>
										
										</form>";	
									?>
									
						</div>
						
					</div>
				</section>
				
<?php
	include '../Includes/footer.php';
?>