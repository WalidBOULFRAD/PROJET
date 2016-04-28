$(function Carte() {

    var map = new L.Map('map');
    var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib = 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 17, maxZoom: 17, attribution: osmAttrib});
    map.setView(new L.LatLng(43.55947645236045, 1.4724624876495227), 17);
    map.addLayer(osm);
	//set up marker and polygonne
    $.getJSON("../assets/json/map.geojson", function (data) {
        var icon = L.icon({
            iconUrl: 'images/info.png',
            iconSize: [20, 20]
        });
        L.geoJson(data, {
            pointToLayer: function (feature, latlng) {
                var marker = L.marker(latlng, {icon: icon});
                link = feature.properties.Location;
                marker.bindPopup("<a href=" + link + ">" + feature.properties.Location + "</a>");
                return marker;
            }
        }).addTo(map);
    });
    
});