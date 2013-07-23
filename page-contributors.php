<?php
/* page-contributors
 * Template for Contributors
 * @package Emerging Technologies
 * @since Emerging Technologies 1.0 */ 
 
		get_header(); ?>
 
		<div id="cbp-fwslider" class="cbp-fwslider">
			<ul>
				<li>
					<div class="caption">
						<p>Together with O'Reilly, we are the designers, <br/>engineers, scientists and thinkers behind <br/><i>Designing for Emerging Technologies</i></p>
					</div>
					<div class="caption-author">
						<p></p>
					</div>
					<a href="#">
					<img src="<?php bloginfo('template_directory'); ?>/images/5344692080_265426978c_o.jpg" alt="contributors"/></a></li>
			</ul>
		</div>
		<!--<div id="primary" class="content-area container">-->
          <div class="content-area container">
            <div id="content" class="site-content sixteen columns" role="main">
				 <div class="contributors">
					 <?php while ( have_posts() ) : the_post(); ?>
	 
						<?php get_template_part( 'content', 'page' ); ?>
	 
					<?php endwhile; // end of the loop. ?>
				</div>
				
            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->
 

<?php get_footer(); ?>