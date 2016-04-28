<?php 
	session_start();	
    // Recuperation du mot de passe :
    $mdp = $_POST['pass'];
    
	// echo "$mdp";
    
    if ($mdp != "neocampus") {
    	header("Location: ../Vue/accueil.php");
    } else {
	    $_SESSION['Connexion'] = "ok";
		header("Location: ../Vue/admin.php");
    }

?>