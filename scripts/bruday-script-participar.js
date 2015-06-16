/* CODIGOS MAPA - CADASTRO.HTMLmap; */

var geocoder; 
var marker1; 		/* origem */
var marker2; 		/* atual  */
var controle1 = 0;
var controle2 = 0;

function initialize() {
  
  geocoder = new google.maps.Geocoder();
  
  var latLng = new google.maps.LatLng(-27.114699175568244, -52.707327651977494);

  var mapOptions = {
    zoom: 16,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.HYBRID 
  };

   map = new google.maps.Map(document.getElementById('form_mapa'), mapOptions);

  /* Try HTML5 geolocation */
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: 'Location found using HTML5.'
      });

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    /* Browser doesn't support Geolocation */
    handleNoGeolocation(false);
  } 
	/* autocomplete endereço 1 origem */
	$("#txtEndereco").autocomplete({
    	source: function (request, response) {
            geocoder.geocode({ 'address': request.term }, function (results, status) {
                response($.map(results, function (item) {
                    return {
                        label: item.formatted_address,
                        value: item.formatted_address
                    }
                }));
            })
        }
    });
	/* autocomplete endereço 2 atual */
    	$("#txtEndereco2").autocomplete({
    	source: function (request, response) {
            geocoder.geocode({ 'address': request.term }, function (results, status) {
                response($.map(results, function (item) {
                    return {
                        label: item.formatted_address,
                        value: item.formatted_address
                    }
                }));
            })
        }
    });

}
/* fim função initialize() */

function codeAddress1() {
  if (controle1 == 0){
	  var cadastro_address = document.getElementById('txtEndereco').value;
	  geocoder.geocode( { 'address': cadastro_address}, function (results, status) {
	    if (status == google.maps.GeocoderStatus.OK) {
	    	
	    	var latitude = results[0].geometry.location.lat();
            var longitude = results[0].geometry.location.lng();
	    	
            $('#txtEndereco').val(results[0].formatted_address);
            $('#txtLatitude').val(latitude);
            $('#txtLongitude').val(longitude);

	    	map.setCenter(results[0].geometry.location);
	      	
	      	marker1 = new google.maps.Marker({
	          map: map,
	          title: 'Vim daqui!',
	      	  draggable: true,
	          animation: google.maps.Animation.DROP,
	          position: results[0].geometry.location
	      });
	    controle1 +=1;

	    google.maps.event.addListener(marker1, 'drag', function () {
	        geocoder.geocode({ 'latLng': marker1.getPosition() }, function (results, status) {
	            if (status == google.maps.GeocoderStatus.OK) {
	                if (results[0]) {  
	                    $('#txtEndereco').val(results[0].formatted_address);
	                    $('#txtLatitude').val(marker1.getPosition().lat());
	                    $('#txtLongitude').val(marker1.getPosition().lng());
	                }
	            }
	        });
	    });

	    } 
	    else {
	      alert('Geocode was not successful for the following reason: ' + status);
	    }
	})
  }
};
/* fim função codeAddress1() */

function codeAddress2() {   
  if (controle2 == 0) {
	  var cadastro_address = document.getElementById('txtEndereco2').value;
	  geocoder.geocode( { 'address': cadastro_address}, function(results, status) {
	    if (status == google.maps.GeocoderStatus.OK) {
	    	
	    	var latitude = results[0].geometry.location.lat();
            var longitude = results[0].geometry.location.lng();
	    	
            $('#txtEndereco2').val(results[0].formatted_address);
            $('#txtLatitude2').val(latitude);
            $('#txtLongitude2').val(longitude);

	    	map.setCenter(results[0].geometry.location);
	      	
	      	marker2 = new google.maps.Marker({
	          map: map,
	          title: 'Estou Aqui!',
	      	  draggable: true,
	          animation: google.maps.Animation.DROP,
	          position: results[0].geometry.location
	      });
	    controle2 +=1;

	    google.maps.event.addListener(marker2, 'drag', function () {
	        geocoder.geocode({ 'latLng': marker2.getPosition() }, function (results, status) {
	            if (status == google.maps.GeocoderStatus.OK) {
	                if (results[0]) {  
	                    $('#txtEndereco2').val(results[0].formatted_address);
	                    $('#txtLatitude2').val(marker2.getPosition().lat());
	                    $('#txtLongitude2').val(marker2.getPosition().lng());
	                }
	            }
	        });
	    });

	    } 
	    else {
	      alert('Geocode was not successful for the following reason: ' + status);
	    }
	})
  }
};
/* fim função codeAddress2() */


function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: latLng,
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}

google.maps.event.addDomListener(window, 'load', initialize); 	/* chamada da função initialize */
