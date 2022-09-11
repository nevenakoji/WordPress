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

// END ENQUEUE PARENT ACTION

add_filter('gettext', 'promeni_cart', 10, 3);

function promeni_cart ($new_text, $related_text, $source)
{
     if ($related_text === 'Product' && $source === 'woocommerce') {
         $new_text = esc_html__('Proizvod', $source);
     }
     return $new_text;
}


add_filter('gettext', 'promeni_cart_price', 10, 3);

function promeni_cart_price ($new_text, $related_text, $source)
{
     if ($related_text === 'Price' && $source === 'woocommerce') {
         $new_text = esc_html__('Cena', $source);
     }
     return $new_text;
}


add_filter('gettext', 'promeni_cart_quantity', 10, 3);

function promeni_cart_quantity ($new_text, $related_text, $source)
{
     if ($related_text === 'Quantity' && $source === 'woocommerce') {
         $new_text = esc_html__('Količina', $source);
     }
     return $new_text;
}

add_filter('gettext', 'promeni_cart_subtotal', 10, 3);

function promeni_cart_subtotal ($new_text, $related_text, $source)
{
     if ($related_text === 'Subtotal' && $source === 'woocommerce') {
         $new_text = esc_html__('Total', $source);
     }
     return $new_text;
}


// How to Change the WooCommerce "Related products" text

add_filter('gettext', 'change_relatedproducts_text', 10, 3);

function change_relatedproducts_text($new_text, $related_text, $source)
{
     if ($related_text === 'Related products' && $source === 'woocommerce') {
         $new_text = esc_html__('Možda ti se dopadne', $source);
     }
     return $new_text;
}

add_action('woocommerce_before_add_to_cart_form', 'dodaj_tekst');
function dodaj_tekst()
{
     $tekst = "Izaberite količinu:";
     
     echo $tekst;
}


add_action('woocommerce_after_add_to_cart_form', 'dodaj_autora');
function dodaj_autora()
{
     echo do_shortcode('[acf field="ime_autora"]');
}
