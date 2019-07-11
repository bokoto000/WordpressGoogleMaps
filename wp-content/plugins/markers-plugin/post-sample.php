<!-- wp:html -->
<?php
/**
 * Template Name: Google Maps API
 *
 * This template is used to demonstrate how to use Google Maps
 * in conjunction with a WordPress theme.
 *
 * @since          Twenty Fifteen 1.0
 *
 * @package        Acme_Project
 * @subpackage     Twenty_Fifteen
 */
?>

<?php get_header(); ?>

<style type="text/css">
#map-canvas {
	
	width:    100%;
	height:   500px;
	
}
</style>

<div id="map-canvas"></div><!-- #map-canvas -->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&signed_in=true&key=AIzaSyDcw0VPl5Vt852Sj-SjW3r7dlTjVf4khYg"></script>

<script type="text/javascript">
google.maps.event.addDomListener( window, 'load', gmaps_results_initialize );
/**
 * Renders a Google Maps centered on Atlanta, Georgia. This is done by using
 * the Latitude and Longitude for the city.
 *
 * Getting the coordinates of a city can easily be done using the tool availabled
 * at: http://www.latlong.net
 *
 * @since    1.0.0
 */
function gmaps_results_initialize() {
	var map = new google.maps.Map( document.getElementById( 'map-canvas' ), {
		zoom:           15,
		center:         new google.maps.LatLng( 33.748995, -84.387982 ),
	});
}
google.maps.event.addDomListener( window, 'load', gmaps_results_initialize );
/**
 * Renders a Google Maps centered on Atlanta, Georgia. This is done by using
 * the Latitude and Longitude for the city.
 *
 * Getting the coordinates of a city can easily be done using the tool availabled
 * at: http://www.latlong.net
 *
 * @since    1.0.0
 */
function gmaps_results_initialize(data) {
        console.log(data);
        

	if ( null === document.getElementById( 'map-canvas' ) ) {
		return;
	}


	map = new google.maps.Map( document.getElementById( 'map-canvas' ), {

		zoom:           7,
		center:         new google.maps.LatLng( markersDataLat[0], markersDataLng[0] ),

	});
        

    for(i=0;i<markersDataLat.length;i++){
    	console.log(markersDataLat[i]);
	    marker = new google.maps.Marker({
		position: new google.maps.LatLng( markersDataLat[i], markersDataLng[i] ),
		map:      map

	   });
    }

	
}
</script>

<?php get_footer(); ?>
<!-- /wp:html -->