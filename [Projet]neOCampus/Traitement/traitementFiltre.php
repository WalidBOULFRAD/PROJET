<?php
	
	session_start();
	
	if (!isset($_POST['type'])) {
		echo "<script>alert('Veuillez choisir un type de Plan !','Informations')</script>";
	    echo "<script>window.location = '../Vue/admin_upload.php';</script>";
	} else {
		$type = $_POST['type'];
	}
	
	$target_dir = "../Vue/images/".$type."/";

	$name = basename($_FILES["photo"]["name"]);
	$target_file = $target_dir.$name;

	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	$target_file = $target_dir.$name;
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["photo"]["tmp_name"]);
	    if($check !== false) {
	        $uploadOk = 1;
	    } else {
	        $uploadOk = 0;
	    }
	}
	
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "<script>alert('Le nom de la photo est deja existant !','Informations')</script>";
	    echo "<script>window.location = '../Vue/admin_upload.php';</script>";
	    $uploadOk = 0;
	}
	
	// Check file size
	if ($_FILES["photo"]["size"] > 500000000) {
	    echo "<script>alert('Cette photo est trop grande !','Informations')</script>";
	    echo "<script>window.location = '../Vue/admin_upload.php';</script>";
	    $uploadOk = 0;
	}
	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
	    echo "<script>alert('Votre fichier ne correspond pas a une image !','Informations')</script>";
	    echo "<script>window.location = '../Vue/admin_upload.php';</script>";
	    $uploadOk = 0;
	}
	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "<script>alert('Fichier incorrect !','Informations')</script>";
	    echo "<script>window.location = '../Vue/admin_upload.php';</script>";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
	        echo "<script>alert('Fichier charger ! Merci ...')</script>";
			echo "<script>window.location = '../Vue/admin.php';</script>";
	    } else {
	        echo "<script>alert('Erreur lors du chargement du Fichier !','Informations')</script>";
	        echo "<script>window.location = '../Vue/admin_upload.php';</script>";
	    }
	}

?>