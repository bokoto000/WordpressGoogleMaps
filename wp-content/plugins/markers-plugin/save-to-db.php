<?php
global $wpdb;
//http://www.mapquestapi.com/search/v2/radius?key=5FID6nGGrkAEcuyUef6fISUtxuHonGCP&radius=150&units=k&maxMatches=4000&origin=38.738624,-102.596528
//http://www.mapquestapi.com/search/v2/radius?key=5FID6nGGrkAEcuyUef6fISUtxuHonGCP&radius=100&units=k&maxMatches=4000&origin=39.738624,-103.596528
//http://www.mapquestapi.com/search/v2/radius?key=5FID6nGGrkAEcuyUef6fISUtxuHonGCP&radius=150&units=k&maxMatches=4000&origin=40.738624,-101.596528
$json = file_get_contents('http://www.mapquestapi.com/search/v2/radius?key=5FID6nGGrkAEcuyUef6fISUtxuHonGCP&radius=150&units=k&maxMatches=4000&origin=40.738624,-101.596528');
$data = json_decode($json);
$searchResults = $data->searchResults;
foreach ($searchResults as $result){
        $field = $result->fields;
        $wpdb->insert('googlemaps_locations_api', array(
            'id' => $field->id,
            'address' => $field->address,
            'city' => $field->city, // ... and so on
            'country' => $field->country, // ... and so on
            'display_lat' => $field->disp_lat, // ... and so on
            'display_lng' => $field->disp_lng, // ... and so on
            'group_sic_code' => $field->group_sic_code, // ... and so on
            'group_sic_code_ext' => $field->group_sic_code_ext, // ... and so on
            'group_sic_code_name' => $field->group_sic_code_name, // ... and so on
            'group_sic_code_name_ext' => $field->group_sic_code_name_ext, // ... and so on
            'mqap_id' => $field->mqap_id, // ... and so on
            'name' => $field->name, // ... and so on
            'phone' => $field->phone, // ... and so on
            'postal_code' => $field->postal_code, // ... and so on
            'side_of_street' => $field->side_of_street, // ... and so on
            'state' => $field->state // ... and so on
        ));
    }
?>