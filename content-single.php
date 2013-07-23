<?php
/* @package emtech
 * @since Emerging Technologies 1.0 */
?>

			<?php post_slider($post->ID); ?>

		
 <div class="container front-page">
			<div class="sixteen columns">
				<div class="content-area two-thirds column">
					<div id="content" class="site-content" role="main">

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<h1 class="entry-title"><?php the_title(); ?></h1>
						 
								<div class="entry-meta">
									<?php emtech_posted_on(); ?>
								</div><!-- .entry-meta -->
							</header><!-- .entry-header -->
						 
							<div class="entry-content">
								<?php the_content(); ?>
								<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'emtech' ), 'after' => '</div>' ) ); ?>
							</div><!-- .entry-content -->
						 
							<footer class="entry-meta">
								<?php
									/* translators: used between list items, there is a space after the comma */
									$category_list = get_the_category_list( __( ', ', 'emtech' ) );
						 
									/* translators: used between list items, there is a space after the comma */
									$tag_list = get_the_tag_list( '', ', ' );
						 
									if ( ! emtech_categorized_blog() ) {
										// This blog only has 1 category so we just need to worry about tags in the meta text
										if ( '' != $tag_list ) {
											$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'emtech' );
										} else {
											$meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'emtech' );
										}
						 
									} else {
										// But this blog has loads of categories so we should probably display them here
										if ( '' != $tag_list ) {
											$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'emtech' );
										} else {
											$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'emtech' );
										}
						 
									} // end check for categories on this blog
						 
									printf(
										$meta_text,
										$category_list,
										$tag_list,
										get_permalink(),
										the_title_attribute( 'echo=0' )
									);
								?>
						 
								<?php edit_post_link( __( 'Edit', 'emtech' ), '<span class="edit-link">', '</span>' ); ?>
							</footer><!-- .entry-meta -->
						</article><!-- #post-<?php the_ID(); ?> -->
            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->
	</div>
</div>