<?php
/** The main template file.
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * Note: for this theme, we will need to possibly pull in external sources as 
 * well as our own posts. The 'blog' home page will actually contain the 
 * content below, which we will alter here in the future.
 *
 * @package Emerging Technologies
 * @since Emerging Technologies 1.0 */
		get_header(); ?>
		
		
		<?php //get first image from latest post 
			//post_slider_latest(); //use post_slider_all(); if you want to get all images from all posts?>
		
			<div class="container front-page">
				<div class="sixteen columns">
					<div class="content-area two-thirds column">
						<div id="content" class="site-content">
							<?php query_posts('showposts=3'); ?>
							<?php if ( have_posts() ) : ?>
								<?php /* Start the Loop */ ?>
								<?php while ( have_posts() ) : the_post(); ?>
									<?php /* Fill this Loop with the code inside content.php by default. But first, 
											* check the Post Format for this post. Search the theme files for a 
											* Post-Format-Specific template, such as content-aside.php, or 
											* content-quote.php. If you find one, load that template for this post 
											* instead. Otherwise, load content.php.s
											* If you want to overload this in a child theme then include a file
											* called content-___.php (where ___ is the Post Format name) and that will be used instead. */
										get_template_part( 'content-excerpt', get_post_format() );
									?>
									<?php endwhile; ?>
									<?php emtech_content_nav( 'nav-below' ); ?>	
									<?php else : ?>
										<?php get_template_part( 'no-results', 'index' ); ?>
								<?php endif; ?>
								
						</div><!-- #content .site-content -->
					</div><!-- #primary .content-area -->
					
					<div class="sidebar one-third column">
						<?php get_sidebar(); ?>
						
					</div><!-- .sidebar -->
					
				</div>
			</div>
				
			<?php get_footer(); ?>