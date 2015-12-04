
<!doctype html>
<html lang="fr">
<head>
<title>HTML5 : Géolocalisation avec carte Google Maps</title>
<meta charset="utf-8">
</head>
<body>

<!-- Un élément HTML pour recueillir l’affichage -->
<div id="maposition"></div>

<!-- Un élément HTML pour recueillir la carte -->
<div id="map" style="width:640px;height:480px"></div>

<!-- Chargement de l'API Google maps -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script>

var coordonneesEvenementLat = 46.539722, coordonneesEvenementLng = 2.430278;
var centreEvenement = new google.maps.LatLng( coordonneesEvenementLat, coordonneesEvenementLng);
var tailleZone = 50000;

// Position par défaut
var centerpos = new google.maps.LatLng(46.539722,2.430278); //Centre de la France

// Ansi que des options pour la carte, centrée sur latlng
var optionsGmaps = {
	center:centerpos,
	navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
	mapTypeId: google.maps.MapTypeId.ROADMAP,
	zoom: 5
};


// Initialisation de la carte avec les options
var map = new google.maps.Map(document.getElementById("map"), optionsGmaps);


var optionsCercle = { //Tracé du cercle
	map: map,
	center: centreEvenement,
	radius: tailleZone,
	fillColor: '#FF0000',
	strokeColor: '#FF0000'
};

var monCercle = new google.maps.Circle(optionsCercle)

if(navigator.geolocation) {

	// Fonction de callback en cas de succès
	function affichePosition(position) {
		// On instancie un nouvel objet LatLng pour Google Maps
		var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

		// Ajout d'un marqueur à la position trouvée
		var marker = new google.maps.Marker({
			position: latlng,
			map: map,
			title:"Vous êtes ici"
		});

	}

	// Fonction de callback en cas d’erreur
	function erreurPosition(error) {
		var info = "Erreur lors de la géolocalisation : ";
		switch(error.code) {
		case error.TIMEOUT:
			info += "Timeout !";
		break;
		case error.PERMISSION_DENIED:
			info += "Vous n’avez pas donné la permission";
		break;
		case error.POSITION_UNAVAILABLE:
			info += "La position n’a pu être déterminée";
		break;
		case error.UNKNOWN_ERROR:
			info += "Erreur inconnue";
		break;
		}
		document.getElementById("maposition").innerHTML = info;
	}

	navigator.geolocation.getCurrentPosition(affichePosition,erreurPosition);

} else {
	alert("Ce navigateur ne supporte pas la géolocalisation");
}
/*
var request = {
    location: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
    radius: '50000',
    types: ['hospital']
  };

var service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, function(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
      for (var i = 0; i < results.length; i++) {
        var place = results[i];
        // If the request succeeds, draw the place location on
        // the map as a marker, and register an event to handle a
        // click on the marker.
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });
      }
  }
     });
 */

google.maps.event.addDomListener(window, 'load', initialize);
</script>


</body>
</html>
