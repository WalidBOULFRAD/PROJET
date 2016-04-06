<?php
	include '../Includes/bootstrap.php';
	include '../Includes/header.php';
?>
    <script src="/Site/Traitement/_assets/highcharts.js"></script>
    <script src="/Site/Traitement/_assets/js/exporting.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
	<script src="/Site/Traitement/_assets/js/croube.js"></script>



			<!-- Banner -->
				<section id="banner">
					<h2>NeOCampus</h2>
				</section>

			<!-- Message Contact -->
				<div class="jumbotron col-md-12">
					
							
					
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

							<div role="tabpanel">
				
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a aria-controls="connexion" role="tab" data-toggle="tab">Campus</a></li>
									<li role="presentation"><a href="./visualisation_batiment.php">Bâtiments</a></li>
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
												<button type='button' class='btn btn-default col-md-12' onclick="">Graphe</button></br>
												<button type='button' class='btn btn-default col-md-12'>Carte & Plan</button>
											</div>
											
										</div>
										
										<div class="col-md-8">
										
											</br>

                                            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
										
											<div id= "map"></div>




<!--
												<script type="text/javascript">
													// set up the map
												    var map = new L.Map('map');
												    var osmUrl ='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
												    var osmAttrib ='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
												    var osm = new L.TileLayer(osmUrl, {minZoom: 17, maxZoom: 17, attribution: osmAttrib});
												    map.setView(new L.LatLng(43.55947645236045, 1.4724624876495227),17);
												    map.addLayer(osm);
			
												    //set the places we want to be clickable
												    var marker1 = L.marker([43.5593610, 1.4717975]).addTo(map);
												    var marker2 = L.marker([43.55867869999999, 1.4697025999999917]).addTo(map);
												    var marker3 = L.marker([43.5594196, 1.4722961999999598]).addTo(map);
												    var marker4 = L.marker([43.562698, 1.469181]).addTo(map);
												    marker1.bindPopup("Batiment 4TP4");
												    marker2.bindPopup("Batiment 4TP2");
												    marker3.bindPopup("Batiment 4R3");
												    marker4.bindPopup("Batiment U4");
												</script>
-->
												
											</div>
											
										</div>
										
										<div class="col-md-2">
										
											<form>
											
												<div class="checkbox"></br>
									                
									                <h3>Filtres :</h3>

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