<?php

	$time = date('Y-m-d');
	
	// Membre :
	
	function insertMembre ($nom, $prenom, $mdp, $sexe, $mail) {
		$req = mysql_query("INSERT INTO MEMBRE VALUES ('' , ".$nom.", ".$prenom.", ".$mdp.", ".$sexe.", ".$mail.")",$db);		
	}
	
	function existMembre ($mail) {
		$req = mysql_query("SELECT COUNT(*) as nombre FROM MEMBRE WHERE mail = '".$mail."'",$db);
		$req = mysql_fetch_array($req);
		return ($req['nombre']);
	}
	
	function correctMDP ($mail, $mdp) {
		$req = mysql_query("SELECT * FROM MEMBRE WHERE mail = '".$mail."'",$db);
		$req = mysql_fetch_array($req);
		return ($mdp == $req['mdp']);
	}
	
	function infoMembre ($mail) {
		$req = mysql_query("SELECT * FROM MEMBRE WHERE mail = '".$mail."'",$db);
		return mysql_fetch_array($req);
	}
	
	$getAllPresence = mysql_query("SELECT * FROM CALENDRIER WHERE idM = ".$_SESSION['membre']['idM'], $db);
	
	// Local
	
	function verifierConnexion() {
		
	  	$ipuser = $_SERVER['REMOTE_ADDR'];
	  	
	  	if($ipuser == '81.56.86.37') {
			return 1;
		}
	  	
	  	return 0;
	}
 
?>