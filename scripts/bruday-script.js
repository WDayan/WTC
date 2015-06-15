/* CODIGOS MAPA - CADASTRO.HTML */

var cadastro_map;
var cadastro_geocoder; 
var cadastro_marker = [];
var controle1 = 0;
var controle2 = 0;

function initialize2() {
  
  cadastro_geocoder1 = new google.maps.Geocoder();
  cadastro_geocoder2 = new google.maps.Geocoder();
  
  var mapOptions2 = {
    zoom: 16,
    center: new google.maps.LatLng(-27.114699175568244, -52.707327651977494),
    mapTypeId: google.maps.MapTypeId.HYBRID 
  };
  cadastro_map = new google.maps.Map(document.getElementById('form_mapa'),
      mapOptions2);
}

function codeAddress1() {
  if (controle1 == 0){
	  var cadastro_address = document.getElementById('txtEndereco').value;
	  cadastro_geocoder1.geocode( { 'address': cadastro_address}, function (results, status) {
	    if (status == google.maps.GeocoderStatus.OK) {
	    	
	    	var latitude = results[0].geometry.location.lat();
            var longitude = results[0].geometry.location.lng();
	    	
            $('#txtEndereco').val(results[0].formatted_address);
            $('#txtLatitude').val(latitude);
            $('#txtLongitude').val(longitude);

	    	cadastro_map.setCenter(results[0].geometry.location);
	      	
	      	cadastro_marker[0] = new google.maps.Marker({
	          map: cadastro_map,
	          title: 'Vim daqui!',
	      	  draggable: true,
	          animation: google.maps.Animation.DROP,
	          position: results[0].geometry.location
	      });
	    controle1 +=1;
	    } 
	    else {
	      alert('Geocode was not successful for the following reason: ' + status);
	    }
	})
  }
};

function codeAddress2() {   
  if (controle2 == 0) {
	  var cadastro_address2 = document.getElementById('txtEndereco2').value;
	  cadastro_geocoder2.geocode( { 'address': cadastro_address2}, function(results, status) {
	    if (status == google.maps.GeocoderStatus.OK) {
	    	
	    	var latitude = results[0].geometry.location.lat();
            var longitude = results[0].geometry.location.lng();
	    	
            $('#txtEndereco2').val(results[0].formatted_address);
            $('#txtLatitude2').val(latitude);
            $('#txtLongitude2').val(longitude);

	    	cadastro_map.setCenter(results[0].geometry.location);
	      	
	      	cadastro_marker[1] = new google.maps.Marker({
	          map: cadastro_map,
	          title: 'Estou Aqui!',
	      	  draggable: true,
	          animation: google.maps.Animation.DROP,
	          position: results[0].geometry.location
	      });
	    controle2 +=1;
	    } 
	    else {
	      alert('Geocode was not successful for the following reason: ' + status);
	    }
	})
  }
};

google.maps.event.addDomListener(window, 'load', initialize2);

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
