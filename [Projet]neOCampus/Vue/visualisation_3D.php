<?php
	include '../Includes/bootstrap.php';
	include '../Includes/header.php';
?>

			<!-- Banner -->
				<section id="banner">
					<h2>neOCampus</h2>
				</section>

			<!-- Message Contact -->
				<div class="jumbotron col-md-12">

					
					<div class="box">
						
						<div>
								
							<center><h2>Visualisation 3D</h2></center>

								<?php
									include '../Includes/2D_3D.php';
								?>

								<div class="col-md-2">
								
									</br>
									"Futur panneau de réglages gauche"

								</div>
								
								<div class="col-md-8">
								
									</br>
									<Body onload = "webGLStart();">
									  <Canvas id = "Test" style = "border: none;" width = "900" height = "500"></canvas>
									</Body>

								</div>
								
								<div class="col-md-2">
								
									</br>
									"Futur panneau de réglages droit"

								</div>

                        </div>

                    </div>
                </div>

    </div>
    
<?php
	include '../Includes/footer.php';
?>