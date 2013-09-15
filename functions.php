<?php 
/**
 * @package WordPress
 * @subpackage TMF
 */

// drag and drop menu support
register_nav_menu( 'primary', 'Primary Menu' );

// enable intro panel
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<div class="title">',
        'after_title' => '</div>',
    ));

?>