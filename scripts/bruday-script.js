/* CODIGOS MAPA - INDEX.HTML */

var map;

function initialize() {
  var mapOptions = {
    zoom: 12,
    center: new google.maps.LatLng(-27.0872653, -52.61062620000001),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('mapa'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

