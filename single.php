<?php
/* The Template for displaying all single posts.
 * @package emtech
 * @since Emerging Technologies 1.0 */

 
get_header(); ?>

 
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container front-page">
				<div class="sixteen columns">
					<div class="content-area two-thirds column">
					<?php emtech_content_nav( 'nav-above' ); ?>
				</div>
				</div>
			</div>
                <?php // theme will search for a file called content-single.php to fill in the Loop, otherwise it will default to content.php.
				get_template_part( 'content', 'single' ); ?>
				<div class="container front-page">
					<div class="sixteen columns">
						<div class="content-area two-thirds column">
                <?php emtech_content_nav( 'nav-below' ); ?>
				
                <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                        comments_template( '', true );
                ?>
						</div>
					</div>
				</div>
            <?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>

 
<?php get_sidebar(); ?>
<?php get_footer(); ?>