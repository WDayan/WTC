/* CODIGOS MAPA - INDEX.HTML */
var markers = [];
var map;
var logoUniver = 'imgs/univer.png';
var logoEstudant = 'imgs/newaluno.png';
var infoWindow;

function initialize() {
	var mapOptions = {
    	zoom: 3,
    	center: new google.maps.LatLng(0, 0),
    	mapTypeId: google.maps.MapTypeId.ROADMAP
  	};
  	map = new google.maps.Map(document.getElementById('mapa'), mapOptions);

  	infoWindow = new google.maps.InfoWindow();

    google.maps.event.addListener(map, 'click', function() { 
    	infoWindow.close();
    });

  	criaMarkerUFFS(0, logoUniver, -10, 10, "UFFS CHAPECO", "Chapecó", "www", "49");

  	criaMarkerAluno(1, logoEstudant, 10, -10, "Bruno", "Chapecó", "Chapecó", "CC");
}

google.maps.event.addDomListener(window, 'load', initialize);


function criaMarkerUFFS(indc, imagm, fm_lat, fm_lng, fm_nome, fm_end, fm_site, fm_tel){
	
	var myLatLng = new google.maps.LatLng(fm_lat, fm_lng);
	markers[indc] = new google.maps.Marker({
	    map: map,
	    icon: imagm,
	    position: myLatLng
    });

    google.maps.event.addListener(markers[indc], 'click', function() { 
      
    var iwContent = '<div id="iw_container">' +
        '<div class="iw_title">' + "Nome: " + fm_nome + '</div>' +
        '<div class="iw_content">' + "Endereço: " + fm_end + '<br />' + "Site: " + fm_site + '<br />' + "Telefone: " + fm_tel + '</div></div>';
      
    infoWindow.setContent(iwContent);

    infoWindow.open(map, markers[indc]);
   });
}


function criaMarkerAluno(indc, imagm, fm_lat, fm_lng, fm_nome, fm_end, fm_campus, fm_curso){
	
	var myLatLng = new google.maps.LatLng(fm_lat, fm_lng);
	markers[indc] = new google.maps.Marker({
	    map: map,
	    icon: imagm,
	    position: myLatLng
    });

    google.maps.event.addListener(markers[indc], 'click', function() { 
      
    var iwContent = '<div id="iw_container">' +
        '<div class="iw_title">' + "Nome: " + fm_nome + '</div>' +
        '<div class="iw_content">' + "Endereço: " + fm_end + '<br />' + "Campus: " + fm_campus + '<br />' + "Curso: " + fm_curso + '</div></div>';
      
    infoWindow.setContent(iwContent);

    infoWindow.open(map, markers[indc]);
   });
}