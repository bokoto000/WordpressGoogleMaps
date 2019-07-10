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
    echo '
    <script>
        var markersDataLat=[';
    global $wpdb;
    $row = $wpdb->get_results( "SELECT * FROM googlemaps_locations");
    foreach ( $row as $row ) 
    { echo $row->len.',';} //$row->your_column_name in table
    echo     ']</script>';
    echo '
    <script>
        var markersDataLng=[';
    $row = $wpdb->get_results( "SELECT * FROM googlemaps_locations");
    foreach ( $row as $row ) 
    { echo $row->lng.',';} //$row->your_column_name in table
    echo     ']</script>';
}
add_action( 'pre_get_posts', 'dh_get_markers');

?>