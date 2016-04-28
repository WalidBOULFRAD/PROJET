<?php
	include '../Includes/header.php';	
?>

			<!-- Banner -->
				<section id="banner">
					<h2>neOCampus</h2>
				</section>

			<!-- Main -->
				<section id="main" class="container 75%">
					<div class="box">
	
						<h2>Inscription</h2>
						<p>Veuillez remplir ce formulaire d'inscription :</p>
						
						<form method="post" action="../Traitement/traitementInscription.php">
							
							<div class="form-group"></br>
				                 Nom * :
				                  <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" maxlength="20">(le nom doit contenir entre 2 et 20 caractères alphabétiques)</br>
				            </div>
				            <div class="form-group"></br>
				                  Prénom * :
				                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom" maxlength="20">(le prénom doit contenir entre 2 et 20 caractères alphabétiques) </br>
				            </div>
				            <div class="form-group"></br>
				                  Mot de passe * :
				                    <input type="password" class="form-control" id="mdpInscription1" name="mdpInscription1" placeholder="Mot de passe" maxlength="20">(le mot de passe doit contenir entre 2 et 20 caractères)</br>
				            </div>
				            <div class="form-group"></br>
				                  Confirmez mot de passe * :
				                  <input type="password" class="form-control" id="mdpInscription2" name="mdpInscription2" placeholder="Confirmez votre mot de passe" maxlength="20">(le mot de passe doit contenir entre 2 et 20 caractères)</br>
				            </div>
				            <div class="form-group"></br>
				                  Email * :
				                    <input type="email" class="form-control" id="mailInscription1" name="mailInscription1" placeholder="email" name="emailInscription1">
				            </div>
				            <div class="form-group"></br>
				                  Confirmez Email * :
				                    <input type="email" class="form-control" id="mailInscription2" name="mailInscription2" placeholder="Confirmez votre email">
				            </div>
				            <div class="form-group"></br>
				                Sexe * :
				                
									<div class="4u 12u(narrower)">
										<input type="radio" id="h" name="sexe" value="h" checked>
										<label for="h">Homme</label>
									</div>
									
									<div class="4u 12u(narrower)">
										<input type="radio" id="f" name="sexe" value="f">
										<label for="f">Femme</label>
									</div>
				            
				        	</div>
							
							<button type="submit" class="button special" name="submit">Envoyer</button>
						
						</form>
						
					</div>
				</section>
				
<?php
	include '../Includes/footer.php';
?>