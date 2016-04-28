<?php
	include '../Includes/header.php';	
?>

			<!-- Banner -->
				<section id="banner">
					<h2>neOCampus</h2>
				</section>

				<!-- Message Contact -->
					<section id="main" class="container">
						<div class="box">
							<div class="container">
	
								<h2>Visualisation</h2>
								
								<div class='btn-group' role='group' aria-label='...'>
									<button type='button' class='btn btn-default'>Campus</button>
									<button type='button' class='btn btn-default'>Batiments</button>
									<button type='button' class='btn btn-default'>Pieces</button>
								</div>
	                          
								<div class='btn-group' role='group' aria-label='...'>
									<button type='button' class='btn btn-default'>Tableau</button></br>
									<button type='button' class='btn btn-default'>Graphe</button></br>
									<button type='button' class='btn btn-default'>Carte & Plan</button>
								</div>
								
								<div id= "map"></div>
									
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
									    marker1.bindPopup("Batiment 4TP4");
									    marker2.bindPopup("Batiment 4TP2");
									    marker3.bindPopup("Batiment 4R3");
									</script>
									
								</div>
								
								<form>
								
									<div class="form-group"></br>
						                Filtre :
						                
										<input type="checkbox" name="choix1" value="1"> Temperature
										<input type="checkbox" name="choix2" value="2"> Luminosité
										<input type="checkbox" name="choix3" value="3"> Volets
						            
						        	</div>
								
								</form>
						
								</br>
	                          
								<center>
									<iframe width="600" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://cartosm.eu/map?lon=1.469137941202&lat=43.561988540155&zoom=15&width=600&height=600&mark=true&nav=true&pan=true&zb=inout&style=default&icon=up"></iframe>
								</center>
								
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
								
							</div>
						</div>
					</section>

<?php
	include '../Includes/footer.php';
?>