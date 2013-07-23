<!--<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" </?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title></?php bloginfo('name'); ?> </?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="</?php bloginfo('html_type'); ?>; charset=</?php bloginfo('charset'); ?>" />
	
	<link rel="shortcut icon" href="./assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="./assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="./assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="./assets/images/apple-touch-icon-114x114.png">
	
	<link rel="stylesheet" href="</?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
	<link rel="stylesheet" type="text/css" href="./css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="./css/layout.css">
	<link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css">

</?php wp_head(); ?>

</head>
 
<body>
	<div id="wrapper" class="container">
		<div id="header" class="sixteen columns">
			<div id="head">
				<div id="head2"><a href="../index.php">Design Axioms</a></div>
				<div id="buy"><a href="http://www.amazon.com/Design-Axioms-Cards-Software-Principles/dp/B006GGHQ3G/ref=sr_1_1?s=books&ie=UTF8&qid=1343676157&sr=1-1&keywords=design+axioms+juhan">Buy a Deck</a></div>
			</div>
			
			<ul class="nav">
            	<li><a href="../index.php">HOME</a></li>
				<li><a href="../axioms.php">AXIOMS</a></li>
				<li><a href="../quotes.php">QUOTES</a></li>
				<li><a href="../authors.php">AUTHORS</a></li>
				<li><a href="../about.php">ABOUT</a></li>
				<li><a href="</?php echo get_option('home'); ?>" class="active" >JOURNAL</a></li>
				<li><a href="../feedback.php">FEEDBACK</a></li>
			</ul><!--#nav--

			<!--<ul id="nav">  
				</?php //wp_list_pages('sort_column=menu_order&title_li='); ?>
			</ul>--
		</div><!--#header .sixteen .columns---->
		
<?php
/* The template for displaying 404 pages (Not Found).
 * @package Emerging Technologies
 * @since Emerging Technologies 1.0 */ 
get_header(); ?>
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
 
            <article id="post-0" class="post error404 not-found">
                <header class="entry-header">
                    <h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'emtech' ); ?></h1>
                </header><!-- .entry-header -->
 
                <div class="entry-content">
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'emtech' ); ?></p>
 
                    <?php get_search_form(); ?>
 
                    <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
 
                    <div class="widget">
                        <h2 class="widgettitle"><?php _e( 'Most Used Categories', 'emtech' ); ?></h2>
                        <ul>
                        <?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
                        </ul>
                    </div><!-- .widget -->
 
                    <?php
                    /* translators: %1$s: smilie */
                    $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'emtech' ), convert_smilies( ':)' ) ) . '</p>';
                    the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
                    ?>
 
                    <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
 
                </div><!-- .entry-content -->
            </article><!-- #post-0 .post .error404 .not-found -->
 
        </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->
 
<?php get_footer(); ?>