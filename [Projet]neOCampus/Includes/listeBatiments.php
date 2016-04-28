											<?php
												// dossier listé (pour lister le répertoire courant : $dir_nom = '.'  --> ('point')
												$dir_nom = './images/Batiment';
												// on ouvre le contenu du dossier courant
												$dir = opendir($dir_nom) or die('Erreur de listage : le répertoire n\'existe pas');
												// on déclare le tableau contenant le nom des fichiers
												$fichier = array();
												 
												while($element = readdir($dir)) {
												    if($element != '.' && $element != '..') {
												        if (!is_dir($dir_nom.'/'.$element)) {
													        $fichier[] = $element;
													    }
												    }
												}
												 
												closedir($dir);
												 
												if(!empty($fichier)){
													// sort() pour le tri croissant, rsort() pour le tri décroissant
												    sort($fichier);
											        foreach($fichier as $lien) {
												        $imageFileType = pathinfo($lien,PATHINFO_EXTENSION);
														echo "<center>";
												        echo basename($lien, ".".$imageFileType);
												        echo "</br></center>";
												        // ajouté width=100% apres img pour adapter les images a l'ecran
											            echo "<center><img width=100% src=\"$dir_nom/$lien\"></center>";
											            echo "</br>";
											        }
												}
											?>