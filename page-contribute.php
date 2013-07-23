<?php
/* page-contribute
 * Template for Contribute
 * @package Emerging Technologies
 * @since Emerging Technologies 1.0 */ 
 
		get_header(); ?>
 
		<div id="cbp-fwslider" class="cbp-fwslider">
			<ul>
				<li><a href="#">
					<div class="caption">
						<h1 class="bold">Call for <br/> Contributors</h1>
					</div>
					<img src="<?php bloginfo('template_directory'); ?>/images/fish2.png" alt="impact statement"/>
				</a></li>
			</ul>
		</div>
		<!--<div id="primary" class="content-area container">-->
        <div class="content-area container page-contribute">
            <div id="content" class="site-content sixteen columns" role="main">
				 
				 
					 <?php while ( have_posts() ) : the_post(); ?>
	 
						<?php get_template_part( 'content', 'page' ); ?>
	 
					<?php endwhile; // end of the loop. ?>
				
            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->
 

<?php get_footer(); ?>