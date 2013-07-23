<?php
/* The Sidebar containing the main widget areas.
 * @package Emerging Technologies
 * @since Emerging Technologies 1.0 */
?>

						<div id="secondary" class="widget-area" role="complementary">
						
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
		 
	<aside id="search" class="widget widget_search"> /n
		
					<?php get_search_form(); ?> /n
				</aside>
		 
				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'emtech' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>
		 
				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'emtech' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>
		 
			<?php endif; // end sidebar widget area ?>
			
						</div><!-- #secondary .widget-area -->

		<?php
		/* “Secondary Widget Area” will not contain any default widgets.
		 * Secondary Widget Area will appear only if it contains active widgets.*/
		?>
				<div id="tertiary" class="widget-area" role="supplementary">
					 <?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- #tertiary .widget-area -->
			