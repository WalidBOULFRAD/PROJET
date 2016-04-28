<?php
	include '../Includes/bootstrap.php';
	include '../Includes/header.php';
?>

<head xmlns="http://www.w3.org/1999/html">
    <script src="../Traitement/_assets/js/Transition_campus.js"></script>
</head>
	
			<!-- Banner -->
				<section id="banner">
					<h2>neOCampus</h2>
				</section>

			<!-- Message Contact -->
				<div class="jumbotron col-md-12">	
					
					<div class="box">
						
						<div>
								
							<center><h2>Campus</h2></center>

							<div role="tabpanel">
				
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a aria-controls="connexion" role="tab" data-toggle="tab">Campus</a></li>
									<li role="presentation"><a href="./visualisation_batiment.php">Bâtiments</a></li>
									<li role="presentation"><a href="./visualisation_piece.php">Pièces</a></li>
								</ul>
								
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active">

										<?php
											include '../Includes/2D_3D.php';
										?>

										<div class="col-md-2">
	                          	
				                          	</br>
											
											<?php
												include '../Includes/sousTypes.php';
											?>
											
										</div>
										
										<div class="col-md-8">
										
											</br>
											<div id= "table"></div>
											<div id= "graphe"></div>
											<div id= "map" ></div>
																								
										</div>
											
									</div>
										
									<div class="col-md-2">
										
										<?php
											include '../Includes/filtres.php';
										?>
									
									</div

								</div>
								
							</div>
						  
						</div>
							
					</div>
					
					<p>.</p>
					</br>

				</div>
				
			</div>

<?php
	include '../Includes/footer.php';
?>