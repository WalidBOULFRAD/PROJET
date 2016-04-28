<?php
	include '../Includes/bootstrap.php';
	include '../Includes/header.php';
?>

<head xmlns="http://www.w3.org/1999/html">
    <script src="../assets/js/Transition_Piece_Batiment.js"></script>
</head>

			<!-- Banner -->
				<section id="banner">
					<h2>neOCampus</h2>
				</section>

			<!-- Message Contact -->
				<div class="jumbotron col-md-12">
					
					<div class="box">
						
						<div>
								
							<center><h2>Pièces</h2></center>

							<div role="tabpanel">
				
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation"><a href="./visualisation_campus.php">Campus</a></li>
									<li role="presentation"><a href="./visualisation_batiment.php">Bâtiments</a></li>
									<li role="presentation" class="active"><a>Pièces</a></li>
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
                                            <div id= "elem" style="min-width: 310px; height: 400px; margin: 0 auto">
	                                            <!--
<?php
													include '../Includes/listePieces.php';
												?>
-->
												HELLO
                                            </div>

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

						<p>.</p>
						</br>

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
	// include '../Includes/footer.php';
?>