<?php

// on se connecte à MySQL 
$db = mysql_connect('walid.boulfrad.sql.free.fr', 'walid.boulfrad', 'Boulfrad31') or die("Erreur de connexion au serveur.");
// $db = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");

// on sélectionne la base 
mysql_select_db('walid_boulfrad',$db) or die("Erreur de connexion à la base");

// Encode UTF8
mysql_query("SET NAMES UTF8")

?>