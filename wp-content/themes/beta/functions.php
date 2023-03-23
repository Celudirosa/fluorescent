<?php

// CARGAR JS Y CSS

    function my_scripts_and_css() {

        //  REMOVE GUTENBERG CSS
        wp_dequeue_style ( 'wp-block-library' );
        wp_dequeue_style ( 'wp-block-library-theme' );
        wp_dequeue_style ( 'wc-blocks-style' );

        if ( !is_admin() ) {
            //if ( is_page ( 'Contact' )) {
                //wp_enqueue_script ( 'js-main', get_stylesheet_directory_uri() . '/js/main.js', '', '', true );
            //}
    
            // wp_enqueue_style ( 'css-main', get_stylesheet_uri() );
            wp_enqueue_style ( 'css-main', get_stylesheet_uri(), '', filemtime ( get_template_directory() . '/style.css' ) );
        }
    }

    add_action ( 'wp_enqueue_scripts', 'my_scripts_and_css', 100 );

?>