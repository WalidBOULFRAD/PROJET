<?php
	include '../Includes/bootstrap.php';
	include '../Includes/header.php';
?>
<head xmlns="http://www.w3.org/1999/html">
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
	<script src="../Traitement/_assets/js/animation.js"> </script>
	<script src="../Traitement/_assets/js/animation1.js"> </script>
</head>
			<!-- Banner -->
				<section id="banner">
					<h2>NeOCampus</h2>
				</section>

			<!-- Message Contact -->
				<div class="jumbotron col-md-12">

					
					<div class="box">
						
						<div>
								
							<center><h2>Pièces</h2></center>
							
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
									<li role="presentation"><a href="./visualisation_batiment.php">Bâtiments</a></li>
									<li role="presentation" class="active"><a >Pièces</a></li>
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
												<button type='button' class='btn btn-default col-md-12' id="graphe">Graphe</button></br>
												<button type='button' class='btn btn-default col-md-12' id="carte">Carte & Plan</button>
											</div>
											
										</div>
										
										<div class="col-md-8">
										
											</br>

											<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

											<div id= "map"></div>

											<script type="text/javascript">
												// set up the map
												var map = new L.Map('map');
												var osmUrl ='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
												var osmAttrib ='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
												var osm = new L.TileLayer(osmUrl, {minZoom: 17, maxZoom: 17, attribution: osmAttrib});
												map.setView(new L.LatLng(43.55947645236045, 1.4724624876495227),17);
												map.addLayer(osm);
												//set up marker and polygonne
												$.getJSON("../Includes/map.geojson", function(data) {
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

                                        </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

    </div>
	<script>
		$(function () {
			$('#container').highcharts({
				chart: {
					type: 'line'
				},
				title: {
					text: 'Température'
				},
				xAxis: {
					categories: ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi']
				},
				yAxis: {
					title: {
						text: 'Temperature (°C)'
					}
				},
				plotOptions: {
					line: {
						dataLabels: {
							enabled: true
						},
						enableMouseTracking: false
					}
				},
				series: [{
					name: 'Salle 214',
					data: [17.0, 15.9, 16.5, 14.5, 17, 13]
				}]
			});
		});
	</script>
<?php
// 	include '../Includes/footer.php';
?>