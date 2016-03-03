<?php
	include '../Includes/header.php';	
?>

			<!-- Banner -->
				<section id="banner">
					<h2>NeOCampus</h2>
				</section>

			<!-- Main -->
				<section id="main" class="container 75%">
					<div class="box">
	
						<h2>Inscription</h2>
						<p>Veuillez remplir ce formulaire d'inscription :</p>
						
						<form method="post" action="../Contoleur/traitementConnexion.php">
							
				            <div class="form-group"></br>
				                  Email * :
				                    <input type="email" class="form-control" id="mailInscription1" name="mailInscription1" placeholder="email" name="emailInscription1">
				            </div>
				            <div class="form-group"></br>
				                  Mot de passe * :
				                    <input type="password" class="form-control" id="mailInscription2" name="mailInscription2" placeholder="password">
				            </div>
							</br>
							<button type="submit" class="button special" name="submit">Envoyer</button>
						
						</form>
						
					</div>
				</section>
				
<?php
	include '../Includes/footer.php';
?>