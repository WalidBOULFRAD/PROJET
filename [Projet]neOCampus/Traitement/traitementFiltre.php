<?php
	
	session_start();
	
	$_POST["Temperature"];
	$_POST["Luminosité"];
	$_POST["Volets"];
	$_POST["Camera"];
	$_POST["Son"];
	$_POST["CO2"];
	$_POST["Humidité"];
	
	echo "<script>window.location = '../Vue/visualisation_campus.php';</script>";
	
?>