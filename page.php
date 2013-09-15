<?php
/**
 * Template Name: Page
 * Description: Page Template
 *
 * @package WordPress
 * @subpackage Bare-Bones
 */

get_header(); ?>
    
    <div id="content">
        
        <?php while ( have_posts() ) : the_post(); ?> <!--  the Loop -->
            
            <?php the_content(); ?>
        
        <?php endwhile; ?><!--  End the Loop -->
        
    </div>

<?php get_footer(); ?>