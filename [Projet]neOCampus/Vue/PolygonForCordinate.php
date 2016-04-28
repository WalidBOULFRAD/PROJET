<?php
	session_start();
	if ($_SESSION['Connexion'] != "ok") {
		header ("Location: ./login.php");
	}
	include '../Includes/headerAdmin.php';
?>
			
				<section id="banner">
					<h2>NeOCampus</h2>
				</section>

				<div class="jumbotron col-md-12" >

					<div class="box">
						
						<div>
								
							<center><h2>Créer un Polygone pour <?php echo $_GET['name'];?> </h2></center>

							<div role="tabpanel">

								<div class="tab-content">
									
									<div role="tabpanel" class="tab-pane active" id="connexion">
										
										<div >
											
											<form style="float:left;position:relative;width:500px;height:auto; margin-left:20px;">

												<?php
													$name = $_GET['name'];
													$lat = $_GET['lat'];
													$lng = $_GET['lng'];
												?>
												
												<label>Indetifiant : </label>
												<input type="text" id="nameField" value=<?php print_r($name);?> disabled="disabled" />

												<label>Latitude : </label>
												<input type="text" id="latitudeField" value= <?php print_r($lat);?> disabled="disabled" />

												<label>Longitude : </label>
												<input type="text" id="longitudeField" value= <?php print_r($lng);?> disabled="disabled" />

												<input type="button" id="add" value="Ajouter" style="position:relative;float:right;top:10px;">
												<input type="button" id="finish" value="Terminer" style="position:relative;float:right;top:10px; right:10px;">

											</form>
											
										</div>

										<div class="col-md-8" >
											
											<div id= "mapForPolyline" ></div>
											
											<script type="text/javascript">
												var latLngTable = [];
												var latlng;
												var request = new XMLHttpRequest();
												var mapPlylineCreator =  new L.Map('mapForPolyline');
												var osmUrl ='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    											var osmAttrib ='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
    											var lat = <?php echo $_GET['lat']?>;
    											var lng = <?php echo $_GET['lng']?>;
    											var osm = new L.TileLayer(osmUrl, {minZoom: 19, maxZoom: 19, attribution: osmAttrib});

												//set the map content
    											mapPlylineCreator.setView(new L.LatLng(lat, lng),19);
    											mapPlylineCreator.addLayer(osm);
    											
    											mapPlylineCreator.on('click',function(e){

    												document.getElementById('latitudeField').value = e.latlng.lat;
    												document.getElementById('longitudeField').value = e.latlng.lng;
    												latlng = e.latlng;
    												L.circle([e.latlng.lat,e.latlng.lng],0.5).addTo(mapPlylineCreator);
    											});

    											document.getElementById('add').onclick = function(){
    												if(latlng!=null){
    													latLngTable.push(latlng);
    												alert("la coordonnée à bien été ajouter.");
    												}
    												
    											};

    											document.getElementById('finish').onclick = function() {
    												var data =  new FormData();
    												alert(latLngTable.length);
    												data.append('name',document.getElementById('nameField').value);
    												data.append('points',JSON.stringify(latLngTable));
    												data.append('polyline',1);
    												request.open('POST',"../Controlleur/mapConfig.php",true);
    												request.send(data);
    												request.onreadystatechange = function () {
          												if (request.readyState == 4 ) {
          													window.location.href = "../Vue/visualisation_campus.php";
          													// window.location.href = "../Vue/admin_ajoutBatiment.php";
          												}
												    }		
    											}

											</script>

										</div>
	
									</div>
										
								</div>
									
							</div>
							  
						</div>
								
					</div>

				</div>
					
<?php
	include '../Includes/footer.php';	
?>