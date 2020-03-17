<?php

function register_manufacturer_vehicle_taxonomy(){
    register_taxonomy( 'manufacturer', 'vehicle', [
        'label'        => __( 'Manufacturer', 'cr-theme' ),
        'public'       => true,
        'rewrite'      => false,
        'hierarchical' => true
    ] );
}

function register_class_vehicle_taxonomy(){
    register_taxonomy( 'class', 'vehicle', [
        'label'        => __( 'Class', 'cr-theme' ),
        'public'       => true,
        'rewrite'      => false,
        'hierarchical' => true
    ] );
}

function cr_vehicle_post_type() {
    $labels = array(
        'name'                  => _x( 'Vehicles', 'Post type general name', 'cr-theme' ),
        'singular_name'         => _x( 'Vehicle', 'Post type singular name', 'cr-theme' ),
        'menu_name'             => _x( 'Vehicles', 'Admin Menu text', 'cr-theme' ),
        'name_admin_bar'        => _x( 'Vehicle', 'Add New on Toolbar', 'cr-theme' ),
        'add_new'               => __( 'Add New', 'cr-theme' ),
        'add_new_item'          => __( 'Add New Vehicle', 'cr-theme' ),
        'new_item'              => __( 'New Vehicle', 'cr-theme' ),
        'edit_item'             => __( 'Edit Vehicle', 'cr-theme' ),
        'view_item'             => __( 'View Vehicle', 'cr-theme' ),
        'all_items'             => __( 'All Vehicles', 'cr-theme' ),
        'search_items'          => __( 'Search Vehicles', 'cr-theme' ),
        'parent_item_colon'     => __( 'Parent Vehicles:', 'cr-theme' ),
        'not_found'             => __( 'No Vehicles found.', 'cr-theme' ),
        'not_found_in_trash'    => __( 'No Vehicles found in Trash.', 'cr-theme' ),
        'featured_image'        => _x( 'Vehicle Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'cr-theme' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'cr-theme' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'cr-theme' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'cr-theme' ),
        'archives'              => _x( 'Vehicle archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'cr-theme' ),
        'insert_into_item'      => _x( 'Insert into Vehicle', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'cr-theme' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Vehicle', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'cr-theme' ),
        'filter_items_list'     => _x( 'Filter Vehicles list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'cr-theme' ),
        'items_list_navigation' => _x( 'Vehicles list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'cr-theme' ),
        'items_list'            => _x( 'Vehicles list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'cr-theme' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'vehicle', $args );
}
 
add_action( 'init', function(){
    cr_vehicle_post_type();
    register_manufacturer_vehicle_taxonomy();
    register_class_vehicle_taxonomy();
} );