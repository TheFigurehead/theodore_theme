<?php

const VEHICLES_PER_LOAD = 6;

function getVehiclesRequestParams($page, $car_class, $manufacturer){
    $query_obj = [
        'post_type' => 'vehicle',
        'numberposts' => VEHICLES_PER_LOAD * $page,
        'meta_key' => 'vehicle_price',
        'orderby' => 'meta_value',
        'order'	=> 'ASC',
        'tax_query' => []
    ];

    if($car_class){
        $query_obj['tax_query'][] = [
            'taxonomy' => 'class',
            'field' => 'term_id',
            'terms' => $car_class
        ];
    }

    if($manufacturer){
        $query_obj['tax_query'][] = [
            'taxonomy' => 'manufacturer',
            'field' => 'term_id',
            'terms' => $manufacturer
        ];
    }

    return $query_obj;
    
}

function getVehiclesBlock($page = 1, $car_class = false, $manufacturer = false){
    

    $vehicles = get_posts(
        getVehiclesRequestParams($page, $car_class, $manufacturer)
    );

    include(locate_template('/template-parts/front-vehicles_loop.php'));

}

add_action( 'wp_ajax_load_vehicles', 'load_vehicles' );
add_action( 'wp_ajax_nopriv_load_vehicles', 'load_vehicles' );

function load_vehicles(){

    $screen = $_POST['screen'];
    $car_class = isset($_POST['car_class']) ? $_POST['car_class'] : false;
    $manufacturer = isset($_POST['manufacturer']) ? $_POST['manufacturer'] : false;

    ob_start();

    getVehiclesBlock($screen, $car_class, $manufacturer);

    $content = ob_get_clean();

    $response = [
        'show_next' => wp_count_posts( 'vehicle' )->publish > $screen * VEHICLES_PER_LOAD,
        'content' => $content
    ];

    echo json_encode($response);

    wp_die();

}