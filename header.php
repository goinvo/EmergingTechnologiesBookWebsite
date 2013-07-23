<?php
/* Custom functions that act independently of the theme templates
 * Eventually, some of the functionality here could be replaced by core features
 * @package Emerging Technologies
 * @since Emerging Technologies 1.0 */
?><!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
	<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8]><html class="ie8" id="ie8" <?php language_attributes(); ?>><![endif]-->
	<!--[if !(IE 8) ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
	
<head profile="http://gmpg.org/xfn/11">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php
		/* Print the <title> tag based on what is being viewed.*/
		global $page, $paged;
		wp_title( '|', true, 'right' );
			// Add the blog name.
		bloginfo( 'name' );
			// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
			// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'emtech' ), max( $paged, $page ) );
	?></title>
	<meta http-equiv="Content-Type" content="</?php bloginfo('html_type'); ?>; charset=</?php bloginfo('charset'); ?>" />
	
	<link rel="shortcut icon" href="./assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="./assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="./assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="./assets/images/apple-touch-icon-114x114.png">
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/Slider/css/default.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/Slider/css/component.css" />
	<script src="<?php bloginfo('template_directory'); ?>/js/Slider/js/modernizr.custom.js"></script>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script><![endif]-->
		
	<?php wp_head(); ?>
</head>
	
<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header cf" role="banner">
			<!--<div class="fish scale-with-grid">
				
			</div>-->
			<div class="container">
				<div class="sixteen columns">
					<div class="site-title"><span class="ital">Designing for</span>Emerging Technologies</div>
					<nav role="navigation" class="site-navigation main-navigation">
						<h1 class="assistive-text"><?php _e( 'Menu', 'emtech' ); ?></h1>
						<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_s' ); ?>"><?php _e( 'Skip to content', 'emtech' ); ?></a></div>
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- .site-navigation .main-navigation -->
				</div>
			</div>
		</header><!-- #masthead .site-header -->
		
		<div id="main" class="site-main">