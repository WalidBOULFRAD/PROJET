<?php 
	
	include '../Includes/header.php'; 
	include '../Includes/connexion.php';	

	$i=0;
	$nomPrenom_erreur = NULL;
	$pseudo_erreur= NULL;
	$mpd_erreur= NULL;
	$mail_erreur= NULL;
	$email_erreur1=NULL;
	$email_erreur2=NULL;
	
    // Recuperation des varibles :
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudoInscription'];
    $mdp1 = $_POST['mdpInscription1'];
    $mdp2 = $_POST['mdpInscription2'];
    $mail1 = $_POST['mailInscription1'];
    $mail2 = $_POST['mailInscription2'];
    $sexe = $_POST['optionsRadios'];
    
    // Verification du nom & prenom
    $query = mysql_query("SELECT count(*) as nombre FROM MEMBRE WHERE nom ='".$nom."' AND prenom = '".$prenom."'",$db);
    $fetch = mysql_fetch_array($query);
    if($fetch['nombre']>0)
	{
		$nomPrenom_erreur = "Vos Nom et Prénom sont deja utilisés par un autre membre";
		$i++;
	}

	// Verification mdp:
	if($mdp1 != $mdp2 || empty($mdp2) || empty($mdp1) )
	{
		$mpd_erreur = "Le mot de passe et sa confirmation sont différents, ou sont vident";
		$i++;
	}
	
	// Verification du mail :
	$query2 = mysql_query("SELECT count(*) as nombre FROM MEMBRE WHERE  mail ='".$mail1."'",$db);
    $fetch2 = mysql_fetch_array($query2);
    if($fetch2['nombre']>0)
	{
		$mail_erreur = "Votre adresse email est deja utilisé par un autre membre";
		$i++;
	}
	if (!preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $mail1) || empty($mail1) || !preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $mail2) || empty($mail2))
    {
        $email_erreur1 = "Votre adresse mail n'a pas un format valide";
        $i++;
    }
    
    if ($mail1 != $mail2)
    {
    	$email_erreur2 = "Votre adresse mail et votre confirmation sont différentes";
        $i++;
    }
    
    if($i != 0){
        echo "<p class='bg-danger col-md-12'>".$nomPrenom_erreur."
	".$mpd_erreur."
	".$mail_erreur."
	".$email_erreur1."
	".$email_erreur2.". Cliquez <a href='../Affichage/inscription.php'>Ici</a> pour retourner à la page précedante</p>";
    } else {
    	$insertion = mysql_query("INSERT INTO MEMBRE VALUES('', '".$nom."', '".$prenom."', '".$mdp1."', '".$sexe."', '".$mail1."', 0)", db);
		if ($insertion){
    		echo "<script>alert('Vous etes bien inscrit, connectez vous maintenant','Informations')</script>";
			echo "<script>window.location = '../Affichage/connexion.php';</script>";
    	}else{
    		echo "<script>alert('une erreur c'est produite lors de votre inscription !','Informations')</script>";
			echo "<script>window.location = '../Affichage/inscription.php';</script>";
    	}
    }

 	include '../Includes/footer.php';

?>