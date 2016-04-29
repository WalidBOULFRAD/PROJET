<?php
	session_start();
?>

<!DOCTYPE HTML>

<html>
	<head>
		
		<title>neOCampus by UPS</title>
		<meta HTTP-EQUIV="Refresh" CONTENT=300 URL="#">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" type="image/png" href="../Vue/images/favicon.png" />
		<!--[if lte IE 8]><script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css"/>
		<!--<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">-->
		<!--[if lte IE 8]><link rel="stylesheet" href="../assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
		<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
		<script src="../assets/js/jquery-2.1.1.min.js"></script>
		<script src="../assets/js/jquery-2.2.3.min.js"></script>
		<script src="../assets/js/VisualisationJsLibrary.js"></script>
		
		<script src="http://code.highcharts.com/highcharts.js"></script>
		<script src="http://code.highcharts.com/modules/exporting.js"></script>
	    <script src="https://code.highcharts.com/highcharts-more.js"></script>
		<script src="../assets/js/animation.js"></script>
		<script src="../assets/js/webgl-utils.js"></script>
		<script src="../assets/js/glMatrix-0.9.5.min.js"></script>
		<script src="../assets/js/lecteur3D.js"></script>

		<style>
			#mapForPolyline{
				height: 400px;
				width : 800px;
				margin: auto;
			}
			#map {
				height: 400px;
				width : 800px;
				margin: auto;
			}
			#table {
				height: 400px;
				width : 800px;
				margin: auto;
				display: none;
				background-color: #2b542c;
				overflow: scroll;
			}
			#graphe {
				height: 400px;
				width : 800px;
				margin: auto;
				display: none;
				background-color: #2b542c;
			}
			#element {
				height: 400px;
				width : 800px;
				margin: auto;
				display: none;
				background-color: #ffffff;
			}
    	</style>
    	
	</head>
	<body class="landing" onload="javascript: $.getScript('../assets/js/VisualisationJsLibrary.js', function (){ displayMap(); } );">
		
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="../index.php">neOCampus</a> by UPS</h1>
					<nav id="nav">
						<ul>
							<li><a href="../index.php"><i class="fa fa-home"></i> Accueil</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Menu</a>
								<ul>
									<li><a href="../Vue/description.php">Description</a></li>
									<li><a href="../Vue/visualisation_campus.php">Visualisation</a></li>
									<li><a href="../Vue/search.php">Recherche</a></li>
									<li><a href="../Vue/admin.php">Administrateur</a></li>
									<li><a href="../Vue/contact.php">Contact</a></li>
								</ul>
							</li>
							<?php
								if ($_SESSION['Connexion'] != "ok") {
									echo "<li><a href='../Vue/login.php' class='button'>Connexion</a></li>";
								} else {
									echo "<li><a href='../Traitement/traitementDeconnexion.php' class='button'>Déconnexion</a></li>";
								}
							?>
						</ul>
					</nav>
				</header>