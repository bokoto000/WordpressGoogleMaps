<?php
/**
* Plugin Name: MarkerPlugin
* Plugin URI: http://borisvelkovski.com/
* Description: This is the very first plugin I ever created(It really is for the interview).
* Version: 1.0
* Author: Boris V
* Author URI: http://borisvelkovski.com/
**/
function dh_get_markers(){
    global $wpdb;
    $results = $wpdb->get_results( "SELECT * FROM $wpdb->googlemaps_locations ");
    foreach($results['data'] as $result) {
        echo $result['type'], '<br>';
    }
    return $results;
}
add_action( 'pre_get_posts', 'dh_get_markers');
dh_get_markers();
?>