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

						<center>

							<h2>Connexion</h2>
							<p>Veuillez saisir le mot de passe :</p>
							
							<form method="post" action="../Traitement/traitementConnexion.php">
								
					            <div class="form-group"></br>
					                  Mot de passe * :
					                    <input type="password" class="form-control" id="pass" name="pass" placeholder="password">
					            </div>
					            
								</br>
								
								<button type="submit" class="button special" name="submit">Envoyer</button>
							
							</form>

						</center>
						
					</div>
				</section>
				
<?php
	include '../Includes/footer.php';
?>