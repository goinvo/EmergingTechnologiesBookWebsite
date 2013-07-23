<?php
/* The template for displaying the footer.
 * Contains the closing of the id=main div and all content after
 * @package Emerging Technologies
 * @since Emerging Technologies 1.0 */
?>
		</div><!-- #main .site-main -->
		
		<div class="container">
			<div class="sixteen columns">
				<footer id="colophon" class="site-footer" role="contentinfo">
					<div class="site-info">
						
					</div><!-- .site-info -->
				</footer><!-- #colophon .site-footer -->
			</div>
		</div>
	</div><!-- #page .hfeed .site -->
	 
	<!--</?php wp_footer(); ?>-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/Slider/js/jquery.cbpFWSlider.js"></script>
	<script>
		$( function() {
			/*
			- how to call the plugin:
			$( selector ).cbpFWSlider( [options] );
			- options:
			{
				// default transition speed (ms)
				speed : 500,
				// default transition easing
				easing : 'ease'
			}
			- destroy:
			$( selector ).cbpFWSlider( 'destroy' );
			*/

			$( '#cbp-fwslider' ).cbpFWSlider();

		} );
	</script>
</body>
</html>