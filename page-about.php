<?php
/* page-about
 * Template for About the Book
 * @package Emerging Technologies
 * @since Emerging Technologies 1.0 */ 
 
		get_header(); ?>
		<div class="container">
			<div class="book2 sixteen columns">
			
			</div>
		</div>
		<div id="cbp-fwslider" class="about-cbp-fwslider cbp-fwslider">
			<ul>
				<li>
					<a href="#">
					<img src="<?php bloginfo('template_directory'); ?>/images/bookbg.gif"/></a>
				</li>
			</ul>
		</div>
		<!--<div id="primary" class="content-area container">-->
        <div class="content-area container page-about">
            <div id="content" class="site-content sixteen columns" role="main">
					 <?php while ( have_posts() ) : the_post(); ?>
	
						<?php get_template_part( 'content', 'page' ); ?>
						
					<?php endwhile; // end of the loop. ?>
            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->
 

<?php get_footer(); ?>