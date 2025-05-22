<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style','hello-elementor-header-footer' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );


// 1. Habilitar suporte a REST API no ACF
add_filter('acf/settings/rest_api_enabled', function() {
    return true;
});

// 2. Registrar campos ACF na API
add_action('rest_api_init', 'register_acf_projeto_fields');

function register_acf_projeto_fields() {
    register_rest_field('projeto', 'acf', [
        'get_callback' => 'get_projeto_acf_fields',
        'update_callback' => null,
        'schema' => null
    ]);
}

function get_projeto_acf_fields($object, $field_name, $request) {
    return get_fields($object['id']);
}
  
// END ENQUEUE PARENT ACTION
