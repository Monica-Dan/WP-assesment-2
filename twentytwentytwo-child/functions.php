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
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'twentytwentytwo-style','twentytwentytwo-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION
// 
// 
// 
// Add some code using WooCommerce hook to display the attributes (size & color) under the products

add_action('woocommerce_after_shop_loop_item_title', 'display_product_size', 5);

function display_product_size() {
	
  global $product;
  $size = $product->get_attribute('pa_size');

 if(isset($size)) {
    echo '<div class="items"><p>Size: ' . $size . '</p></div>';
 }
	
}


add_action('woocommerce_after_shop_loop_item_title', 'display_product_color', 7);

function display_product_color() {
	
  global $product;
  $color = $product->get_attribute('pa_color');

 if(isset($color)) {
    echo '<div class="items"><p>color: ' . $color . '</p></div>';
 }
	
}
