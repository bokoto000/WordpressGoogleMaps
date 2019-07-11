<?php
/**
* Plugin Name: MarkerPlugin
* Plugin URI: http://borisvelkovski.com/
* Description: This is the very first plugin I ever created(It really is for the interview).
* Version: 1.0
* Author: Boris V
* Author URI: http://borisvelkovski.com/
**/


if( ! defined('ABSPATH')){
    die('Not ok');
}



function dh_get_markers(){
    global $wpdb;
    echo '
    <script>
        var markersDataLat=[';
    $row = $wpdb->get_results( "SELECT * FROM googlemaps_locations_api");
    foreach ( $row as $row ) 
    { echo $row->display_lat.',';} //$row->your_column_name in table
    echo     ']</script>';
    echo '
    <script>
        var markersDataLng=[';
    $row = $wpdb->get_results( "SELECT * FROM googlemaps_locations_api");
    foreach ( $row as $row ) 
    { echo $row->display_lng.',';} //$row->your_column_name in table
    echo     ']</script>';
}
add_action( 'pre_get_posts', 'dh_get_markers');

?>