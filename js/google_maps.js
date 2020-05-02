// On initialise la latitude et la longitude de Paris (centre de la carte)
var lat = 51.1282205;
var lon = 71.4306682;
var map = null;

// Fonction d'initialisation de la carte
var pays = {
	"Paris":{"lat": 48.852969,"lon": 2.349903},
	"Espagne":{"lat": 39.3262345,"lon": -4.8380649},
	"Angleterre":{"lat": 51.5073219,"lon": -0.1276474},
	"Allemagne":{"lat": 51.0834196,"lon": 10.4234469},
	"Suisse":{"lat": 46.7985624,"lon": 8.2319736},
	"Japon":{"lat": 35.6828387,"lon": 139.7594549}
};
function initMap() {
	map = new google.maps.Map(document.getElementById("map"), {
		center: new google.maps.LatLng(lat, lon),
		zoom: 1,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControl: true,
		scrollwheel: true,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
		},
		navigationControl: true,
		navigationControlOptions: {
			style: google.maps.NavigationControlStyle.ZOOM_PAN
		}
	});
	// Nous parcourons la liste des villes
	for(ville in pays){
		var marker = new google.maps.Marker({
			// A chaque boucle, la latitude et la longitude sont lues dans le tableau
			position: {lat: pays[ville].lat, lng: pays[ville].lon},
			// On en profite pour ajouter une info-bulle contenant le nom de la ville
			title: ville,
			map: map
		});	
	}
}
window.onload = function(){
// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
initMap(); 
};

