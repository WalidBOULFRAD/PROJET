<?php

	$mail = 'walid31.7@hotmail.fr'; // Déclaration de l'adresse de destination.
	
	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
	{
		$passage_ligne = "\r\n";
	}
	else
	{
		$passage_ligne = "\n";
	}
		 
	//=====Définition du sujet.
	$sujet = "Demande de Contact - Site Free WB - ".$_POST['name']." - ".$_POST['email'];
	//=========
	 
	//=====Création du message.
	$message = $passage_ligne.$_POST['message'].$passage_ligne;
	//==========

	//echo ($mail."\n".$sujet."\n".$message."\n");
	//=====Envoi de l'e-mail.
	mail($mail,$sujet,$message);
	//==========
	
	header("Location: ../index.php");
?>