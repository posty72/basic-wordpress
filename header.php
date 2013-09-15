<?php
/**
 * @package WordPress
 * @subpackage Bare-Bones
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
    
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/layout.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/typography.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/forms.css">

<?php wp_head(); ?> 
       
</head>

<body <?php body_class(); ?>>

	<div id="page">
    
        <!-- HEAD -->
    	<div id="head">
        
            <div id="menu-primary">
                <?php wp_nav_menu( 'menu-primary' ); ?>
            </div>
        
        </div>
        <!-- HEAD end -->
    	
        <!-- MAIN -->
        <div id="main">