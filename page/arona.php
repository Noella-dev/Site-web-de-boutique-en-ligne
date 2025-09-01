<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../leaflet/leaflet.css">
    <script src="../leaflet/leaflet.js"></script>
</head>
<body>
<!--<div id= "map" style = "width: 900px; height: 580px"></div>
<script>//Creating map options
var mapOptions = {center: [17.385044, 78.486671], zoom: 10}
//Creating a map object
var map = new L.map('map', mapOptions);
//Creating a Layer object
var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
//Adding layer to the map
map.addLayer(layer);</script>
-->
<script>
let MyControlClass = L.Control.extend({
options: {},
onAdd: function(map) {
    var div = L.DomUtil.create('div', 'leaflet-bar my-control');
    div.innerHTML = 'Ma première interface';
return div;},
onRemove: function(map) {}
});
let myControl = new MyControlClass().addTo(map);
</script>
<style>
    .my-control {background-color : white;}
    .options: {position: 'topleft';}
</style>
</body>
</html>