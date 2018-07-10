
<html>
<head>
</head>
<body>
<p >click it for location</p>
<p id="id1"></p>
<p >Map of current Location</p>
<button onclick="locationshow()">Try it</button><br><br>
<button onclick="getmap()">Map</button>
<div id="map" width="450px" height="450px" background-color="grey"></div>
<script>
var x=document.getElementById("id1");
function locationshow(){
 if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}
</script>
<script https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
function getmap(){
 var v={
 center: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID;
 }
 var map = new google.maps.Map(document.getElementById("map"), v);
}</script>
</body>
</html>
