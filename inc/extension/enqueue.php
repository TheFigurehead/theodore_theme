<?php

add_action(
	'wp_enqueue_scripts',
	function(){
        wp_enqueue_style( 'cr-styles', get_stylesheet_directory_uri() . '/cr-styles.css', [], time() );
        wp_enqueue_script( 'cr-ajax', get_stylesheet_directory_uri() . '/js/ajax.js', ['jquery'] );
        wp_localize_script( 'cr-ajax', 'ajax_object',
            array( 
                'ajaxurl' => admin_url( 'admin-ajax.php' )
            )
        );
	}
);