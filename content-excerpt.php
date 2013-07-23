<?php
/* The template for displaying posts in a custome excerpt post format
 * nearly identical to content.php, minus the date, author name, categories, footer, and tags, layout
 * @package emtech
 * @since Emerging Technologies 1.0 */
?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								
								<?php if ( is_search() ) : // Only display Excerpts for Search ?>
<div class="entry-summary">
									<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'emtech' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
									<?php the_excerpt(); ?>
								</div><!-- .entry-summary -->
								<?php else : ?>
<div class="entry-content cf">
									 <?php 
										if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
											the_post_thumbnail('article-thumb');
										} else {
											echo main_image(); }
									 ?> 
									<div class="entry-contents">
										<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'emtech' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
										<?php the_excerpt(); ?>
										<p><a href="<?php the_permalink(); ?>">Read More</a></p>
									</div>
									<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'emtech' ), 'after' => '</div>' ) ); ?>
									
								</div><!-- .entry-content -->
								<?php endif; ?>
								
							</article><!-- #post-<?php the_ID(); ?> -->
							