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

    //  CONFIGURACIÓN DEL TEMA

    function my_theme_setup()
    {
        // Añadir soporte para...

        add_theme_support ( 'title-tag' );
        add_theme_support ( 'post-thumbnails' );
        add_theme_support ( 'woocommerce' );
        add_theme_support ( 'wc-product-gallery-zoom' );
        add_theme_support ( 'wc-product-gallery-lightbox' );
        add_theme_support ( 'wc-product-gallery-slider' );

        // Registrar ubicaciones de menús...

        register_nav_menu ( 'header-menu', 'Cabecera del sitio' );
        register_nav_menu ( 'footer-menu-1', 'Pie de página 1' );
        register_nav_menu ( 'footer-menu-2', 'Pie de página 2' );
        register_nav_menu ( 'rrss', 'Redes sociales' );
    }

    add_action ( 'after_setup_theme', 'my_theme_setup' );



//  MÁS STUFF

    // Arrasar los estilos de WooCommerce

    // add_filter ( 'woocommerce_enqueue_styles', '__return_false' );

?>