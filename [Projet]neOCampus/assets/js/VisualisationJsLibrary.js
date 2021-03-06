var idTab = new Array('map','table','graphe');
var element_currentlyDisplay;
var oldElementDisplayed = 'map';
var current_filter;
var map = new L.Map('map');
var dataViewActivate = 'table';
var checkBoxTab = ['Temperature','Luminosite','Volets','Camera','Son','CO2','Humidite'];
var nameBuildingForTransition;


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
                $("#tableData").fadeOut().detach();// allow to not repeat the data
                $("#"+nameDiv).append("<table id=\"tableData\">" + "</table>");
                for(var i=0; i< checkBoxTab.length; i++){
                    if( document.getElementById(checkBoxTab[i]).checked){
                        $("#tableData").append( "<tr>" +" <td>" + checkBoxTab[i] + "</td>"+" <td>" + nameBuildingForTransition + "</td>" + "</tr>");
                    }
                    
                }
            }
            break;
        case 'graphe':
            $("#graphe").style = "background-color: red;";
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

/*
    this function allow to set element on the map 
    and load the PolygonForCordinate.php page if the user chose to add a polygon 
    to the current coordinate else a circle is draw in the map 
*/

function ConfigOnCordinateClickEvent(){
    map.on('click', function(e) {
    var buildingsName = prompt("Donner un nom à cette coordonée : ","");
        if(buildingsName != null && buildingsName !="" &&  buildingsName.length > 1){
            if(confirm("voulez vous associer un polygonne à cette coordonée?")){
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
                         circle.bindPopup( "<a >see the filters data</a>");
                        break;
                    case 'Polylines':
                        var tab= actual_JSON[i].Points;
                        var name = actual_JSON[i].Name;
                        var polygon = L.polygon(tab.Points).addTo(map);
                        polygon.bindPopup($('<a id="speciallink">'+name+'</a>').click(function() {
                                                seeDetailsOf(document.getElementById("speciallink").textContent);
                                            })[0]);
                        break;
                }
            }
        }
    };
    request.send(null); 
}

function seeDetailsOf(buildingName){
    nameBuildingForTransition = buildingName;
    switch(dataViewActivate){
        case 'table':
            displayElement('table');
            break;
        case 'graphe':
            displayElement('graphe');
            break; 
    }

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
    map.setView(new L.LatLng(43.562015, 1.468874), 17);
    map.addLayer(osm);
}
 
function hiddeElement (targetToReplace) {
	document.getElementById(targetToReplace.style.display = 'none');
}