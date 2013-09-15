<?php
/**
 * @package WordPress
 * @subpackage Bare-Bones
 */
 
get_header(); ?>
	
    <div class="index">
    
        <?php while ( have_posts() ) : the_post(); ?> <!--  the Loop -->
		
			<?php the_title(); ?>
        
            <?php the_content(); ?>
        
        <?php endwhile; ?><!--  End the Loop -->
        
    </div>

<?php get_footer(); ?>          
