 <?php
	 
	$arrayName;
	
	if ($_POST['polyline'] == 0) {
		$content = array('Name'=>$_POST['name'],'Points'=>[$_POST['latitude'],$_POST['longitude']], 'Type'=>'Cercle');
		//$myfile = fopen("objectOnMap.json", "w+") or die("Unable to open file!");
		if ('' == file_get_contents("../assets/json/objectOnMap.json")) {
		 	$array =  array($content);
			file_put_contents("../assets/json/objectOnMap.json", json_encode($array));
		} else {
			$contentFile =  file_get_contents("../assets/json/objectOnMap.json");
		 	$arrayName = json_decode($contentFile);
		 	$arrayName[] = $content;
		 	file_put_contents("../assets/json/objectOnMap.json", json_encode($arrayName));
		}
	} else if ($_POST['polyline'] == 1) {
		if ('' == file_get_contents("../assets/json/objectOnMap.json")) {
			$arrayPoint =  array("Points"=>json_decode($_POST['points']));
			$content ['Name'] =  $_POST['name'];
			$content ['Points'] =  $arrayPoint;
			$content ['Type'] = 'Polylines';
			file_put_contents("../assets/json/objectOnMap.json", json_encode(array($content)));
		} else {
			$contentFile =  file_get_contents("../assets/json/objectOnMap.json");
			$arrayPoint =  array("Points"=>json_decode($_POST['points']));
			$content ['Name'] =  $_POST['name'];
			$content ['Points'] =  $arrayPoint;
			$content ['Type'] = 'Polylines';
			$finalContent =  json_decode($contentFile);
			$finalContent[] = $content;
			file_put_contents("../assets/json/objectOnMap.json", json_encode($finalContent));
		}
	}

?>