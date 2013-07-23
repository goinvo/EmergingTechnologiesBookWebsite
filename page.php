<?php
/* The template for displaying all pages.
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * @package Emerging Technologies
 * @since Emerging Technologies 1.0 */ 
 
		get_header(); ?>
 
		<div id="cbp-fwslider" class="cbp-fwslider">
			<ul>
				<li><a href="#">
					<div class="caption">
						<h1 class="bold">Call for <br/> Contributors</h1>
					</div>
					<img src="<?php bloginfo('template_directory'); ?>/images/6830238522_fdfb77a26c_o.jpg" alt="emerging interfaces"/></a></li>
				<li><a href="#">
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
					<img src="<?php bloginfo('template_directory'); ?>/images/5140071374_5c7444874a_o.jpg" alt="impact statement"/>
					
				</a></li>
				<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/267284464_a35d357fdf_o.jpg" alt="about"/></a></li>
				<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/3428641462_d8473370f5_o.jpg" alt="about"/></a></li>
			</ul>
		</div>
		<!--<div id="primary" class="content-area container">-->
        <div class="content-area container">
            <div id="content" class="site-content sixteen columns" role="main">
				 <div class="column">
				 
					 <?php while ( have_posts() ) : the_post(); ?>
	 
						<?php get_template_part( 'content', 'page' ); ?>
	 
						<?php comments_template( '', true ); ?>
	 
					<?php endwhile; // end of the loop. ?>
				</div>
            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->
 

<?php get_footer(); ?>