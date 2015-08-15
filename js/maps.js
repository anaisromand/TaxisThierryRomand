var map;
function initialize() {
	var mapOptions = {
		zoom: 10,
		navigationControl: false,
		mapTypeControl   : false,
		scaleControl     : false,
		draggable        : false,
		panControl       : false,
		zoomControl      : false,
		scrollwheel      : false,
		streetViewControl: false,
		center           : new google.maps.LatLng(49.1113057,4.4645554)
	};

	var map = new google.maps.Map(document.getElementById('map-container'),mapOptions);

	var markerSuippes = new google.maps.Marker({
		position: new google.maps.LatLng(49.119119, 4.536905),
		map     : map,
		title   : 'Suippes'
	});

	var markerChalons = new google.maps.Marker({
		position: new google.maps.LatLng(48.955327,4.348166),
		map     : map,
		title   : 'Châlons-en-Champagne'
	});

	var markerFagnieres = new google.maps.Marker({
		position: new google.maps.LatLng(48.962862,4.3185718),
		map     : map,
		title   : 'Fagnières'
	});

	var markerSaintMemmie = new google.maps.Marker({
		position: new google.maps.LatLng(48.9533182,4.3822627),
		map     : map,
		title   : 'Saint-Memmie'
	});

	var markerSainteMarie = new google.maps.Marker({
		position: new google.maps.LatLng(49.2375445,4.4967632),
		map     : map,
		title   : 'Sainte-Marie-à-Py'
	});

}

google.maps.event.addDomListener(window, 'load', initialize);