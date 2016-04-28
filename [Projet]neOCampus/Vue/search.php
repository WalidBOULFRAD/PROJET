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
							
							<form method="post" role="search" action="../Traitement/traitementRecherche.php">
						        
						        <div class="form-group"></br>
									Mot clé :
									<input type="text" class="form-control" id="motCle" name="motCle" placeholder="Dites moi ce que vous voulez rechercher !" maxlength="20"></br>
			            		</div>
						        
						        <button type="submit" class="button special" name="submit">Valider</button>
						    
						    </form>
							
						</div>
					</div>
				</section>

<?php
	include '../Includes/footer.php';
?>