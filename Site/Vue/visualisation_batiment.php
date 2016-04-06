<?php
	include '../Includes/bootstrap.php';
	include '../Includes/header.php';
?>

			<!-- Banner -->
				<section id="banner">
					<h2>NeOCampus</h2>
				</section>

			<!-- Message Contact -->
				<div class="jumbotron col-md-12">
					
							
					
					<div class="box">
						
						<div>
								
							<center><h2>Bâtiments</h2></center>
							
<!--
							<div class="col-md-12">
								
								<div class='btn-group' role='vue' aria-label='...'>
									<button type='button' class='btn btn-default'>Campus</button>
									<button type='button' class='btn btn-default'>Bâtiments</button>
									<button type='button' class='btn btn-default'>Pieces</button>
								</div>
							
							</div>
-->

							<div role="tabpanel">
				
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation"><a href="./visualisation_campus.php">Campus</a></li>
									<li role="presentation" class="active"><a>Bâtiments</a></li>
									<li role="presentation"><a href="./visualisation_piece.php">Pièces</a></li>
								</ul>
								
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="connexion">

										<div class="col-md-12">
											<button type='button' class='btn btn-default col-md-6'>2D</button>
											<button type='button' class='btn btn-default col-md-6'>3D</button></br>
										</div>

										<div class="col-md-2">
	                          	
				                          	</br>
											
											<div class='btn-group' role='type' aria-label='...'>
												<button type='button' class='btn btn-default col-md-12'>Tableau</button></br>
												<button type='button' class='btn btn-default col-md-12'>Graphe</button></br>
												<button type='button' class='btn btn-default col-md-12'>Carte & Plan</button>
											</div>
											
										</div>
										
										<div class="col-md-8">
										
											</br>
										
											<div id= "map"></div>
												
<!-- 												Developper ici la partie batiment -->
												
											</div>
											
										</div>
										
										<div class="col-md-2">
										
											<form>
											
												<div class="checkbox"></br>
									                
									                <h3>Filtre :</h3>													
													
													<div class="checkbox" data-toggle="buttons">
														
														<div class="checkbox col-md-12">
														    <label>
														    	<input type="checkbox" value="temp"> Temperature
														    </label>
														</div>
														
														<div class="checkbox col-md-12">
														    <label>
														    	<input type="checkbox" value="lum"> Luminosité
														    </label>
														</div>
														
														<div class="checkbox col-md-12">
														    <label>
														    	<input type="checkbox" value="volets"> Volets
														    </label>
														</div>
														
														<div class="checkbox col-md-12">
														    <label>
														    	<input type="checkbox" value="cam"> Camera (Capteur présence)
														    </label>
														</div>
														
														<div class="checkbox col-md-12">
														    <label>
														    	<input type="checkbox" value="son"> Son (Décibels)
														    </label>
														</div>
														
														<div class="checkbox col-md-12">
														    <label>
														    	<input type="checkbox" value="co2"> CO2
														    </label>
														</div>
														
														<div class="checkbox col-md-12">
														    <label>
														    	<input type="checkbox" value="hum"> Humidité
														    </label>
														</div>
														
<!--
	 													<label class="btn btn-primary active col-md-12">
															<input id="myB" type="checkbox" autocomplete="off" checked> Température
														</label>
														
														<br>
														
														<label class="btn btn-primary col-md-12">
															<input id="myB" type="checkbox" autocomplete="off"> Luminosité
														</label>
														
														<br>
														
														<label class="btn btn-primary col-md-12">
															<input id="myB" type="checkbox" autocomplete="off"> Volets
														</label>
														
														<br>
														
														<label class="btn btn-primary col-md-12">
															<input id="myB" type="checkbox" autocomplete="off"> Camera (Capteur présence)
														</label>
														
														<br>
														
														<label class="btn btn-primary col-md-12">
															<input id="myB" type="checkbox" autocomplete="off"> Son (Décibels)
														</label>
														
														<br>
														
														<label class="btn btn-primary col-md-12">
															<input id="myB" type="checkbox" autocomplete="off"> CO2
														</label>
														
														<br>
														
														<label class="btn btn-primary col-md-12">
															<input id="myB" type="checkbox" autocomplete="off"> Humidité
														</label> 
-->
														
													</div>
													
									            
									        	</div>
											
											</form>
										
										</div

									</div>
									
								</div>
							  
							</div>
								
						</div>

					</div>
					
				</div>


<?php
	include '../Includes/footer.php';
?>