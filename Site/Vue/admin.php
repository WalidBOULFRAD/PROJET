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
	
						<h2>Administrateur</h2>
						
						<div id="container"> 
								<span>
									<?php
										echo "<form action='../Traitements/uploadImage.php' method='post' enctype='multipart/form-data'>
												  <input type='file' id='photo' name='photo'>
												  <button type='submit' class='btn btn-default' name='submit'>Envoyer</button>
											</form>";	
									?>
								</span>  
						</div>
						
					</div>
				</section>
				
<?php
	include '../Includes/footer.php';
?>