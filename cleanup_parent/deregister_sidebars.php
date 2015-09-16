<?php

/*
 * Deregister extra sidebars
 * of your Parent Theme
 */

function go_away_extra_sidebars() {

     if ( is_admin() && current_user_can('editor') ) {
         unregister_sidebar( 'my_custom_widget_area' ); //parameter is sidebar ID
     }
 }

//Enable by uncommenting here:
//add_action('widgets_init', 'go_away_extra_sidebars', 20);
