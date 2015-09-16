<?php

/*
 * Deregister extra widgets that
 * your parent theme added
 */

function my_site_parent_unregister_widgets() {

    // remove (some) WordPress default Widgets
    unregister_widget( 'WP_Widget_Pages' );
    unregister_widget( 'WP_Widget_Calendar' );

    // remove Parent registered Widget
    unregister_widget( 'ParentWidgetName' );

}
//Enable by uncommenting here:
//add_action( 'widgets_init', 'my_site_parent_unregister_widgets', 10 );
