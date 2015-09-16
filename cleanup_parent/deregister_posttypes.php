<?php

/*
 * Master function to
 * Deregister Post Types in General
 */

if ( ! function_exists( 'unregister_post_type' ) ) :
  function unregister_post_type( $post_type ) {
    global $wp_post_types;
      if ( isset( $wp_post_types[ $post_type ] ) ) {
        unset( $wp_post_types[ $post_type ] );
        return true;
     }
     return false;
   }
endif;

//Then, deregister individually here:
//unregister_post_type( 'testimonials' );

/*
 * Remove support for certain features
 * of a Parent CPT
 */

function remove_parent_cpt_features() {
      remove_post_type_support( 'testimonials', 'excerpt' );
      remove_post_type_support( 'testimonials', 'revisions' );
}
//Enable by uncommenting here:
//add_action( 'init', 'remove_parent_cpt_features' );
