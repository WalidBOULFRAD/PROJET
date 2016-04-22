<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?php
	include '../Includes/header.php';	
?>
			<!-- Banner
				<section id="banner">
					<h2>NeOCampus</h2>
				</section>

			 Message Contact -->
				<div class="jumbotron col-md-12" ">
					
							
					
					<div class="box">
						
						<div>
								
							<center><h2>Campus</h2></center>
							
<!--
							<div class="col-md-12">
								
								<div class='btn-group' role='vue' aria-label='...'>
									<button type='button' class='btn btn-default'>Campus</button>
									<button type='button' class='btn btn-default'>Bâtiments</button>
									<button type='button' class='btn btn-default'>Pieces</button>
								</div>
							
							</div>
-->
	<!-- modifif ici -->
							<div role="tabpanel">
				
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a aria-controls="connexion" role="tab" data-toggle="tab">Campus</a></li>
									<li role="presentation"><a href="./visualisation_batiment.php">Bâtiments</a></li>
									<li role="presentation"><a href="./visualisation_piece.php">Pièces</a></li>
								</ul>
								
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="connexion">

										<div class="col-md-2">
	                          	
				                          	</br>
											
											<div class='btn-group' role='type' aria-label='...'>
												<button type='button' class='btn btn-default col-md-12'
														onclick="javascript: $.getScript('../Includes/VisualisationJsLibrary.js',
												 		function (){ displayElement('table'); } );">
													Tableau
												</button>
												</br>
												<button type='button' class='btn btn-default col-md-12'
														onclick="javascript: $.getScript('../Includes/VisualisationJsLibrary.js',
												 		function (){ displayElement('graphe'); } );">Graphe</button></br>
												<button type='button' class='btn btn-default col-md-12'
														onclick="javascript: $.getScript('../Includes/VisualisationJsLibrary.js',
												 		function (){ displayElement('map'); } );">Carte & Plan</button>
											</div>
											
										</div>
										
										<div class="col-md-8" >
											<div id="table"></div>
											<div id="graphe"></div>
											<div id= "map" ></div>
										</div>
											
										</div>
										
										<div class="col-md-2">
										
											<form>
											
												<div class="form-group"></br>
									                
									                <h3>Filtres:</h3>

													<div class="btn-group" data-toggle="buttons">
														
														<label class="btn btn-primary active col-md-12">
															<input type="checkbox" autocomplete="off" checked> Température
														</label>
														
														<br>
														
														<label class="btn btn-primary col-md-12">
															<input type="checkbox" autocomplete="off"> Luminosité
														</label>
														
														<br>
														
														<label class="btn btn-primary col-md-12">
															<input type="checkbox" autocomplete="off"> Volets
														</label>
														
														<br>
														
														<label class="btn btn-primary col-md-12">
															<input type="checkbox" autocomplete="off"> Camera (Capteur présence)
														</label>
														
														<br>
														
														<label class="btn btn-primary col-md-12">
															<input type="checkbox" autocomplete="off"> Son (Décibels)
														</label>
														
														<br>
														
														<label class="btn btn-primary col-md-12">
															<input type="checkbox" autocomplete="off"> CO2
														</label>
														
														<br>
														
														<label class="btn btn-primary col-md-12">
															<input type="checkbox" autocomplete="off"> Humidité
														</label>
														
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
//	include '../Includes/footer.php';
?>