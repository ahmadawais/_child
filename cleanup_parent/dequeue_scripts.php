<?php

/**
 * Dequeue the Parent Theme scripts.
 *
 * Hooked to the wp_print_scripts action, with a late priority (100),
 * so that it is after the script was enqueued.
 */
function my_site_dequeue_script() {
	wp_dequeue_script( 'comment-reply' ); //If you're using disqus, etc.
	wp_dequeue_script( 'jquery_ui' ); //jQuery UI, no thanks!
	wp_dequeue_script( 'fancybox' ); //Nah, I use FooBox
	wp_dequeue_script( 'wait_for_images' );
	wp_dequeue_script( 'jquery_easing' );
	wp_dequeue_script( 'swipe' );
	wp_dequeue_script( 'waypoints' );
}
//Enable by uncommenting here:
//add_action( 'wp_print_scripts', 'my_site_dequeue_script', 100 );

/**
 * Dequeue Additional Parent Theme styles.
 *
 * Hooked to the wp_enqueue_scripts action, with a late priority (100),
 * so that it runs after the parent style was enqueued.
 */

function parent_dequeue_css() {
    wp_dequeue_style('additional-parent-style');
    wp_deregister_style('additional-parent-style');
}
//Enable by uncommenting here:
//add_action('wp_enqueue_scripts','parent_dequeue_css', 100);

/*
 * To dequeue Admin scripts use instead the
 * "admin_print_scripts" action.
 * You can also target a specific admin page
 * by adding it's hook to the end.
 * This example targets the widgets.php page
 */

 function dequeue_parent_admin_script() {
    wp_dequeue_script( 'parent-widget-js-script' );
 }

//Enable by uncommenting here:
//add_action( 'admin_print_scripts-widgets.php', 'dequeue_parent_admin_script', 100 );
