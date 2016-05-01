var idTab = new Array('map','table','graphe','element');
var element_currentlyDisplay;
var oldElementDisplayed = 'map';
var current_filter;
var map = new L.Map('map');

// this fonction allow to switch betwen each view on the curent page 
// in order to display content of diferent div
// elementTodisplay -> the div name ( warnig the div name must be in idTab) 

function displayElement(elementTodisplay){
    for(var i = 0; i < idTab.length;i++){
        var current_element =  idTab[i];
        if(current_element == elementTodisplay){
            document.getElementById(current_element).style.display = 'block';
            oldElementDisplayed = element_currentlyDisplay;
            element_currentlyDisplay = current_element;
            setContentBlockDisplayed(element_currentlyDisplay);
        }else{
            document.getElementById(current_element).style.display = 'none';
        }
    }
}

function setCurrentFilterTo(filter){
    current_filter = filter;
}

function setContentBlockDisplayed(nameDiv){
    switch (nameDiv){
        case 'map' :
            document.getElementById('table').style.display = 'none';
            document.getElementById('graphe').style.display = 'none';
            displayMapWithoutLoadMaker();
            break;
        case 'table':
            if(!(oldElementDisplayed == nameDiv)){
	            // allow to not repeat the data
                $("#tableData").fadeOut().detach();
                $("#"+nameDiv).append("<table id=\"tableData\">" + "</table>");
                for(var i=0; i< 10; i++){
                    $("#tableData").append( "<tr>" +
                        " <td>test" + i + "</td>" +
                        " <td>test" + i + "</td>" +
                        "</tr>");
                }
            }
            break;
        case 'graphe':
            $("#graphe").style = "background-color: red;";
            break;
        case 'element':
        	document.getElementById('table').style.display = 'none';
            document.getElementById('graphe').style.display = 'none';
            document.getElementById('map').style.display = 'none';
			document.getElementById('element').style.display = 'block';
        	break;
    }
}

function sendPostRequest(name, latitude, longitude){
    var data =  new FormData();
        if(name != null && latitude!=null && longitude!=null){
            data.append('name',name);
            data.append('latitude',latitude);
            data.append('longitude',longitude);
            data.append('polyline',0);
            var request = new XMLHttpRequest();
            request.open('POST', '../Controlleur/mapConfig.php', true);
            request.send(data);
        }
}

function sendPostRequest2(){
    var data =  new FormData();
    var request = new XMLHttpRequest();
    request.open('POST', '../Includes/listeBatiments.php', true);
    request.send(data);
}

/*
    this function allow to set element on the map 
    and load the PolygonForCordinate.php page if the user chose to add a polygon 
    to the current coordinate else a circle is draw in the map 
*/

function ConfigOnCordinateClickEvent(){
    map.on('click', function(e) {
    var buildingsName = prompt("Donnez un nom à cette coordonée : ","");
        if(buildingsName != null && buildingsName !="" &&  buildingsName.length > 1){
            if(confirm("Voulez vous associer un polygone à cette coordonée ? En annulant cela reviens à associer un cerle")){
                window.location.href =  "../Vue/PolygonForCordinate.php?lat="+e.latlng.lat+"&lng="+e.latlng.lng+"&name="+buildingsName;
            } else {
                sendPostRequest(buildingsName,e.latlng.lat,e.latlng.lng);
                var circle =  L.circle(e.latlng,12).addTo(map);
            }  
        } else if( buildingsName =="" || buildingsName.length <= 1 ) {
            alert("Cette coodornée devrais avoir un nom ayant au moins 2 charactères!!");
        }

    });    
}

// allow to draw objet on the map 
function loadMakerOnMapFrom(file){
    var request = new XMLHttpRequest();
    request.overrideMimeType("application/json");
    request.open('GET', file, true);
    var valueOfFilterOn;
    request.onreadystatechange = function () {
          if (request.readyState == 4 && request.status == "200") {
            var actual_JSON = JSON.parse(request.responseText);
            for(var i=0; i < actual_JSON.length;i++) {
                switch(actual_JSON[i].Type){
                    case 'Cercle':
                        var circle =  L.circle(actual_JSON[i].Points,12).addTo(map);
                        circle.bindPopup( "Batiment : " + actual_JSON[i].Name);
                        break;
                    case 'Polylines':
                        var tab= actual_JSON[i].Points;
                        var polygon = L.polygon(tab.Points).addTo(map);
                        polygon.bindPopup( "Batiment : " + actual_JSON[i].Name);
                        break;
                }
            }
        }
    };
    request.send(null); 
}

function displayMap(){
    var osmUrl ='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib ='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 17, maxZoom: 17, attribution: osmAttrib});
	//set the map content on Université Paul Sabatier 
    map.setView(new L.LatLng(43.562015, 1.468874),17);
    map.addLayer(osm);
    loadMakerOnMapFrom("../assets/json/objectOnMap.json?cache="+(Math.random()*1000000));
}

function displayMapAdmin(){
    var osmUrl ='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib ='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 17, maxZoom: 17, attribution: osmAttrib});
	//set the map content on Université Paul Sabatier 
    map.setView(new L.LatLng(43.562015, 1.468874),17);
    map.addLayer(osm);
	ConfigOnCordinateClickEvent();
    loadMakerOnMapFrom("../assets/json/objectOnMap.json?cache="+(Math.random()*1000000));
}

function displayMapWithoutLoadMaker(){
    var osmUrl ='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib ='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 17, maxZoom: 17, attribution: osmAttrib});
	//set the map content on Université Paul Sabatier 
    map.setView(new L.LatLng(43.562015, 1.468874),17);
    map.addLayer(osm);
}
 
function hiddeElement (targetToReplace) {
	document.getElementById(targetToReplace.style.display = 'none');
}