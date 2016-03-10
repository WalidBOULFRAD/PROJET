<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?php
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
										
											<div id= "map" ></div>
												
												<script type="text/javascript">
													 // set up the map
												    var map = new L.Map('map');
												    var osmUrl ='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
												    var osmAttrib ='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
												    var osm = new L.TileLayer(osmUrl, {minZoom: 17, maxZoom: 17, attribution: osmAttrib});
												    map.setView(new L.LatLng(43.55947645236045, 1.4724624876495227),17);
												    map.addLayer(osm);
													//set up marker and polygonne
													 $.getJSON("../Includes/map.geojson", function(data){
														 var icon = L.icon({
															 iconUrl: 'images/info.png',
															 iconSize: [20,20]
														 });
														 L.geoJson(data,{

															 pointToLayer: function(feature,latlng){
																 var marker = L.marker(latlng,{icon: icon});
																 link = feature.properties.Location;
																 marker.bindPopup("<a href="+link+">"+feature.properties.Location+"</a>");
																 return marker;
															 }
														 }).addTo(map);
													 });
												</script>
												
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
	include '../Includes/footer.php';
?>