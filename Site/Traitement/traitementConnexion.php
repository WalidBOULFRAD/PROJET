<?php 
	
    // Recuperation du mot de passe :
    $mdp = $_POST['pass'];
    
	// echo "$mdp";
    
    if ($mdp != "neocampus") {
    	header("Location: ../index.php");
    } else {
		header("Location: ../Vue/admin.php");
    }

?>