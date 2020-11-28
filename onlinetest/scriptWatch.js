var domSpeed     = document.getElementById("speed"),
    domLatitude  = document.getElementById("latitude"),
    domLongitude = document.getElementById("longitude"),
    domAltitude  = document.getElementById("altitude"),
    domHeading   = document.getElementById("heading"),
    domUpdate    = document.getElementById("update"),
    update       = 0;

if (navigator.geolocation) {
  // getCurrentPosition used for one-time

 navigator.geolocation.getCurrentPosition(showPosition);

  // watchPosition used for sat-nav like position update
  navigator.geolocation.watchPosition(showPositionlive);

} else {
  x.innerHTML = "Geolocation is not supported by this browser.";
}

function showPositionlive(position){
  var latitude  = position.coords.latitude,
      longitude = position.coords.longitude,
      accuracy  = position.coords.accuracy,
      altitude  = position.coords.altitude,
      heading   = position.coords.heading,
      speed     = position.coords.speed;

      var latLng = new google.maps.LatLng(latitude,longitude);
      createMarker(latLng);
}

function showPosition(position) {
  var latitude  = position.coords.latitude,
      longitude = position.coords.longitude,
      accuracy  = position.coords.accuracy,
      altitude  = position.coords.altitude,
      heading   = position.coords.heading,
      speed     = position.coords.speed,
      speedMPH  = (speed*60*60)/1609,
      speedMPH  = speedMPH.toFixed(1);

  update = update;

  domUpdate.innerHTML    = update;
  domSpeed.innerHTML     = speedMPH;
  domLatitude.innerHTML  = latitude;
  domLongitude.innerHTML = longitude;
  domAltitude.innerHTML  = altitude;
  domHeading.innerHTML   = heading;

    var latLng = new google.maps.LatLng(latitude,longitude);
showMap(latLng);

}
function showMap(latLng) {

  //Setting up the map options like zoom level, map type.
  var mapOptions = {
    center: latLng,
    zoom: 18,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  //Creating the Map instance and assigning the HTML div element to render it in.
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
}

function createMarker(latLng, placeResult) {
  var markerOptions = {
    position: latLng,
    map: map,
    animation: google.maps.Animation.DROP,
    clickable: true
  }
  //Setting up the marker object to mark the location on the map canvas.
  var marker = new google.maps.Marker(markerOptions);

  if (placeResult) {
    var content = placeResult.name+'<br/>'+placeResult.vicinity+'<br/>'+placeResult.types;
    addInfoWindow(marker, latLng, content);
  }
  else {
    var content = 'You are here: ' + latLng.lat() + ', ' + latLng.lng();
    addInfoWindow(marker, latLng, content);
  }

}
