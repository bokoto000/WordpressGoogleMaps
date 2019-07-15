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

<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  overflow:scroll;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>

</style>
<p>Filters:</p>
<div class="dropdown">
  <button onclick="cityFilterToggle()" class="dropbtn">City</button>
  <div id="cityDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a onclick=setCityFilter('All')>All</a>
  </div>
</div>

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
cityFilter='All';
function gmaps_results_initialize(data) {
        console.log(data);
        

	if ( null === document.getElementById( 'map-canvas' ) ) {
		return;
	}

	var map, marker;

	map = new google.maps.Map( document.getElementById( 'map-canvas' ), {

		zoom:           7,
		center:         new google.maps.LatLng(apiData[0].lat, apiData[0].lng ),

	});
        

        for(i=0;i<apiData.length;i++){
           if(cityFilter!='All'){
                    if(apiData[i].city==cityFilter){
                       marker = new google.maps.Marker({
		              position: new google.maps.LatLng( apiData[i].lat, apiData[i].lng ),
		              map:      map

	               });
                    }
                }
           else {
	        marker = new google.maps.Marker({
		    position: new google.maps.LatLng( apiData[i].lat, apiData[i].lng ),
		    map:      map

	       });
           }
        }

	
}
</script>


<script>

function setCityFilter(data){
	cityFilter=data;
	gmaps_results_initialize(data);
}

var citiesCount=cities.length;
for(i=0;i<citiesCount;i++)
	document.getElementById("cityDropdown").innerHTML += "<a onclick=setCityFilter('"+cities[i]+"')>"+cities[i]+"</a>" ;

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function cityFilterToggle() {
  document.getElementById("cityDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("cityDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>

<?php get_footer(); ?>
<!-- /wp:html -->