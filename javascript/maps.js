var map_cj, map_sj;

function initMap(){
	var myLatLng = {lat:46.7568134, lng: 23.6195512};
	var myLatLng2 = {lat:47.175567, lng: 23.068799};

	var map_1 = {
		zoom:17,
		center:myLatLng,
		mapTypeId: google.maps.MapTypeId.STREETMAP
	}
	var map_2 = {
		zoom:17,
		center: myLatLng2
	}
	map_cj = new google.maps.Map(document.getElementById('map-cj'), map_1);
	//map_sj = new google.maps.Map(document.getElementById('map-sj'), map_2);


	var marker_cj = new google.maps.Marker({
		position: myLatLng,
		map: map_cj,
		title: 'Zodiac Piscine'
	});
	// var marker_sj = new google.maps.Marker({
	// 	position: myLatLng2,
	// 	map: map_sj,
	// 	title: 'Zodiac Piscine'
	// });
}