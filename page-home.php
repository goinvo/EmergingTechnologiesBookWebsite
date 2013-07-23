<?php
/* page-home
 * Template for Home
 * @package Emerging Technologies
 * @since Emerging Technologies 1.0 */ 
		get_header(); ?>
 
		<div id="cbp-fwslider" class="cbp-fwslider">
			<ul>
				<li><a href="#">
					<div class="caption">
						<h1 class="bold">From genetic engineering <br/> to neuroscience <br/>to wearables <br/>to biohacking</h1>
					</div>
					<img src="<?php bloginfo('template_directory'); ?>/images/6830238522_fdfb77a26c_o.jpg" alt="emerging interfaces"/>
					</a></li>
				<li>
					<div class="caption">
						<p>As we face a future where what it means to be <br/>
						human will be inexorably changed, we <br/>
						desperately need experience design to help <br/>
						frame out interactions with emerging <br/>
						technologies &mdash; from skin-top embeddable <br/>
						computers to bio printable organs to swarming <br/>
						robots to human genome hacking &mdash; that are <br/>
						already racing ahead of out ability to process <br/>
						and manage them on an emotional, ethical, and <br/>
						societal level.</p>
					</div>
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/images/5140071374_5c7444874a_o.jpg" alt="impact statement"/>
					</a>
					<div class="caption-author">
						<p>Photo from <a href="http://www.flickr.com/photos/decoded_conference/">Decoded Conference</a></p>
					</div>
				</li>
				<li>
					<div class="caption-author">
						<p>Photo by <a href="http://www.flickr.com/photos/fluidforms/">Fluid Forms</a></p>
					</div>
					<a href="#">
					<img src="<?php bloginfo('template_directory'); ?>/images/3428641462_d8473370f5_o.jpg" alt="about"/>
				</a></li>
				<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/5344692080_265426978c_o.jpg" alt="about"/></a></li>
			</ul>
		</div>
		<!--<div id="primary" class="content-area container">-->
        <div class="content-area container home-page">
            <div id="content" class="site-content" role="main">
				<div class="sixteen columns">
					<div class="one-third column">
						<div class="book-column">
							<div class="book scale-with-grid"></div>
						</div>
					</div>
					 <div class="two-thirds column">
						 <?php while ( have_posts() ) : the_post(); ?>
		 
							<?php get_template_part( 'content', 'page' ); ?>
		 
							<?php comments_template( '', true ); ?>
		 
						<?php endwhile; // end of the loop. ?>
					</div>
				</div>
				
				<div class="blog-feed sixteen columns">
					<?php
						$args = array(
							'posts_per_page' => 3,
							'paged' =>  get_query_var( 'page' )
						);

						$my_query = new WP_Query( $args );
						
						while( $my_query->have_posts() ) { $my_query->the_post();
							get_template_part( 'content-excerpt', get_post_format() );
						}
					?>
				</div>
            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->
	</div>
</div>

<?php get_footer(); ?>