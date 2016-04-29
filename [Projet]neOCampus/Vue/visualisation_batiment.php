<?php
	include '../Includes/bootstrap.php';
	include '../Includes/header.php';
?>

<head xmlns="http://www.w3.org/1999/html">
    <script src="../assets/js/Transition_Piece_Batiment.js"></script>
	<script src="../assets/js/Courbe.js"></script>
	<script src="../assets/js/Tableau.js"></script>
</head>

			<!-- Banner -->
				<section id="banner">
					<h2>neOCampus</h2>
				</section>

			<!-- Message Contact -->
				<div class="jumbotron col-md-12">		
					
					<div class="box">
						
						<div>
								
							<center><h2>Bâtiments</h2></center>

							<div role="tabpanel">
				
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation"><a href="./visualisation_campus.php">Campus</a></li>
									<li role="presentation" class="active"><a>Bâtiments</a></li>
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
												include '../Includes/sousTypes_Piece_Batiment.php';	
											?>
											
										</div>
										
										<div class="col-md-8">

											</br>
											
											<div id="courbe" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                                            <div id="tbl" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                                            <div id= "machin" style="min-width: 310px; height: 400px; margin: 0 auto">

												<?php
													include '../Includes/listeBatiments.php';
												?>

                                            </div>
											
										</div>
										
										<div class="col-md-2">
										
											<?php
												include '../Includes/filtres.php';
											?>
										
										</div>

									</div>
									
								</div>
							  
							</div>
								
						</div>

						<p>.</p>
						</br>

					</div>
					
				</div>

<?php
	// include '../Includes/footer.php';
?>