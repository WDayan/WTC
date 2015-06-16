/* CODIGOS MAPA - INDEX.HTML */

var codigos_map;

function initialize() {
  var mapOptions = {
    zoom: 3,
    center: new google.maps.LatLng(0, 0),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  codigos_map = new google.maps.Map(document.getElementById('mapa'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);
