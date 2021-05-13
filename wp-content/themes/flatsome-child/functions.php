<?php
// Add custom Theme Functions here

function wpb_custom_new_menus() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'About Menu' ),
      'extra-menu' => __( 'Product Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menus' );
