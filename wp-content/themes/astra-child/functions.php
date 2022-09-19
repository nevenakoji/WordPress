<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


// How to Change the WooCommerce "Your cart is currently empty" text


add_filter('gettext', 'change_yourcartiscurrentlyempty_text', 10, 3);

function change_yourcartiscurrentlyempty_text($new_text, $related_text, $source)
{
     if ($related_text === 'Your cart is currently empty.' && $source === 'woocommerce') {
         $new_text = esc_html__('Tvoja korpa je prazna.', $source);
     }
     return $new_text;
}


add_filter('gettext', 'change_returntoshop_text', 10, 3);

function change_returntoshop_text($new_text, $related_text, $source)
{
     if ($related_text === 'Return to shop' && $source === 'woocommerce') {
         $new_text = esc_html__('Vrati se na SHOP stranu', $source);
     }
     return $new_text;
}

add_filter('gettext', 'change_viewcart_text', 10, 3);

function change_viewcart_text($new_text, $related_text, $source)
{
     if ($related_text === 'View cart' && $source === 'woocommerce') {
         $new_text = esc_html__('Pregled korpe', $source);
     }
     return $new_text;
}

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

add_filter('gettext', 'change_applycoupon_text', 10, 3);

function change_applycoupon_text($new_text, $related_text, $source)
{
     if ($related_text === 'Apply coupon' && $source === 'woocommerce') {
         $new_text = esc_html__('Promotivni kod', $source);
     }
     return $new_text;
}

add_filter('gettext', 'change_updatecart_text', 10, 3);

function change_updatecart_text($new_text, $related_text, $source)
{
     if ($related_text === 'Update cart' && $source === 'woocommerce') {
         $new_text = esc_html__('Osveži korpu', $source);
     }
     return $new_text;
}

add_filter('gettext', 'change_shipping_text', 10, 3);

function change_shipping_text($new_text, $related_text, $source)
{
     if ($related_text === 'Shipping' && $source === 'woocommerce') {
         $new_text = esc_html__('Isporuka', $source);
     }
     return $new_text;
}

add_filter('gettext', 'change_checkout_text', 10, 3);

function change_checkout_text($new_text, $related_text, $source)
{
     if ($related_text === 'Checkout' && $source === 'woocommerce') {
         $new_text = esc_html__('Plaćanje', $source);
     }
     return $new_text;
}

add_filter('gettext', 'change_relatedproducts_text', 10, 3);

function change_relatedproducts_text($new_text, $related_text, $source)
{
     if ($related_text === 'Related products' && $source === 'woocommerce') {
         $new_text = esc_html__('Ants ti preporučuje', $source);
     }
     return $new_text;
}

add_filter('gettext', 'change_billingdetails_text', 10, 3);

function change_billingdetails_text($new_text, $related_text, $source)
{
     if ($related_text === 'Billing details' && $source === 'woocommerce') {
         $new_text = esc_html__('Detalji za naplatu', $source);
     }
     return $new_text;
}


add_filter('gettext', 'change_yourorder_text', 10, 3);

function change_yourorder_text($new_text, $related_text, $source)
{
     if ($related_text === 'Your order' && $source === 'woocommerce') {
         $new_text = esc_html__('Tvoja porudžbina', $source);
     }
     return $new_text;
}

add_filter('gettext', 'change_shiptoadifferentaddress_text', 10, 3);

function change_shiptoadifferentaddress_text($new_text, $related_text, $source)
{
     if ($related_text === 'Ship to a different address?' && $source === 'woocommerce') {
         $new_text = esc_html__('Isporuči na drugu adresu?', $source);
     }
     return $new_text;
}
add_filter('gettext', 'change_haveacoupon_text', 10, 3);

function change_haveacoupon_text($new_text, $related_text, $source)
{
     if ($related_text === 'Have a coupon?' && $source === 'woocommerce') {
         $new_text = esc_html__('Imaš Ants kupon?', $source);
     }
     return $new_text;
}

add_filter('gettext', 'change_clickheretoenteryourcode_text', 10, 3);

function change_clickheretoenteryourcode_text($new_text, $related_text, $source)
{
     if ($related_text === 'Click here to enter your code' && $source === 'woocommerce') {
         $new_text = esc_html__('Klikni da ubaciš kupon', $source);
     }
     return $new_text;
}


add_filter('gettext', 'change_checkoutisnotavailablewhilstyourcartisempty_text', 10, 3);

function change_checkoutisnotavailablewhilstyourcartisempty_text($new_text, $related_text, $source)
{
     if ($related_text === 'Checkout is not available whilst your cart is empty.' && $source === 'woocommerce') {
         $new_text = esc_html__('Ups, tvoja korpa je prazna.', $source);
     }
     return $new_text;
}



