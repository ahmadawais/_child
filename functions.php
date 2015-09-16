<?php
/**
 * Child Theme Functions
 */

/*
 * Dequeues or Deregisters the Parent Theme's
 * Scripts, Styles, Post Types, Sidebars or Widgets.
 * Based on the article by Devin Walker at WordImpress.com:
 * https://wordimpress.com/removing-styles-scripts-from-your-wordpress-parent-theme/
 */
include_once('cleanup_parent/dequeue_scripts.php');
include_once('cleanup_parent/deregister_posttypes.php');
include_once('cleanup_parent/deregister_sidebars.php');
include_once('cleanup_parent/deregister_widgets.php');

/*
 * Enqueue the parent style.css
 *
 * twentyfifteen parent theme for twentfifteen-child
 *
 */
add_action( 'wp_enqueue_scripts', 'aa_theme_enqueue_styles' );
function aa_theme_enqueue_styles() {

    // Parent style variable
    $parent_style = 'parent-style';
    // Enqueue Parent theme's style
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    // Enqueue Child theme's style and ensure it is
    // Setting 'parent-style' as a dependency will ensure that the child theme stylesheet loads after it.
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
}
