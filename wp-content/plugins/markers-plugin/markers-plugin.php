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
    $rows = $wpdb->get_results( "SELECT * FROM googlemaps_locations_api");
    echo '<script>var apiData=[';
    $row = $rows;
    foreach ( $row as $row ) 
    { echo '{'.'id:'.$row->id.','.'address:"'.$row->address.'",'.'city:"'.$row->city.'",'.'country:"'.
        $row->country.'",'.'lat:'.$row->display_lat.','.'lng:'.$row->display_lng.','.'group_sic_code:"'.$row->group_sic_code.
        '",'.'group_sic_code_ext:"'.$row->group_sic_code_ext.'",'.'group_sic_code_name:"'.$row->group_sic_code_name.
        '",'.'group_sic_code_name_ext:"'.$row->group_sic_code_name_ext.'",name:"'.$row->name.'",post_code:'.$row->postal_code.'},';} //$row->your_column_name in table
    echo     ']</script>';
    $countries = $wpdb->get_results( "SELECT DISTINCT country FROM googlemaps_locations_api");
    $cities = $wpdb->get_results( "SELECT DISTINCT city,postal_code FROM googlemaps_locations_api");
    echo '<script> var countries=[';
    foreach ( $countries as $country ) 
    { echo '"'.$country->country.'",';} 
    echo     ']</script>';
    echo '<script> var cities=[';
    foreach ( $cities as $city ) 
    { echo '{city:"'.$city->city.'",'.'post_code:'.$city->postal_code.'},';} 
    echo     ']</script>';


}
add_action( 'pre_get_posts', 'dh_get_markers');

?>