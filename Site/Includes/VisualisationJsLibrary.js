/**
 * Created by ludo on 13/03/2016.
 */
var idTab = new Array('map','table','graphe');
var element_currentlyDisplay;
var oldElementDisplayed = 'map';
var map;
var current_filter;

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

function setContentBlockDisplayed(nameDiv){
    switch (nameDiv){
        case 'map' :
            document.getElementById('table').style.display = 'none';
            document.getElementById('graphe').style.display = 'none'
            displayMap();
            break;
        case 'table':
            if(!(oldElementDisplayed == nameDiv)){
                $("#tableData").fadeOut().detach();// allow to not repeat the data
                $("#"+nameDiv).append("<table id=\"tableData\">" +  "</table>");
                for(var i=0; i< 10; i++){
                    $("#tableData").append( "<tr>" +
                        " <td>test"+i+"</td>" +
                        " <td>test"+i+"</td>"+
                        "</tr>")
                }
            }
            break;
        case 'graphe':
            break;
    }
}

function displayMap(){
    // set up the map
    map = new L.Map('map');
    var osmUrl ='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib ='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 17, maxZoom: 17, attribution: osmAttrib});
    map.setView(new L.LatLng(43.55947645236045, 1.4724624876495227),17);
    map.addLayer(osm);
    //set up marker and polygonne
    $.getJSON("../Includes/map.geojson", function(data){
        var icon = L.icon({
            iconUrl: 'images/info.png',
            iconSize: [20,20]
        });
        L.geoJson(data,{

            pointToLayer: function(feature,latlng){
                var marker = L.marker(latlng,{icon: icon});
                link = feature.properties.Location;
                marker.bindPopup("<a href="+link+">"+feature.properties.Location+"</a>");
                return marker;
            }
        }).addTo(map);
    });
}

