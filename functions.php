<?php
/* Emerging Technologies functions and definitions
 * @package Emerging Technologies
 * @since Emerging Technologies 1.0 */
if ( ! isset( $content_width ) )
    $content_width = 654; /* pixels */

	
if ( ! function_exists( 'emtech_setup' ) ):
/* Sets up theme defaults and registers support for various WordPress features.
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 * @since Emerging Technologies 1.0 */
function emtech_setup() {
    /* Custom template tags for this theme.*/
    require( get_template_directory() . '/inc/template-tags.php' );
 
    /* Custom functions that act independently of the theme templates*/
    require( get_template_directory() . '/inc/tweaks.php' );
 
    /* Make theme available for translation: Translations can be filed in the /languages/ directory*/
    load_theme_textdomain( 'emtech', get_template_directory() . '/languages' );
 
    /* Add default posts and comments RSS feed links to head*/
    add_theme_support( 'automatic-feed-links' );
 
    /* Enable support for the Aside Post Format*/
    add_theme_support( 'post-formats', array( 'aside' ) );
 
    /* This theme uses wp_nav_menu() in one location.*/
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'emtech' ),
    ) );
}
endif; // emtech_setup
add_action( 'after_setup_theme', 'emtech_setup' );

/* Enqueue scripts and styles*/
function emtech_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20120206', true );
    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
    }
}
add_action( 'wp_enqueue_scripts', 'emtech_scripts' );

/* Register widgetized area and update sidebar with default widgets
 * @since Emerging Technologies 1.0 */
function shape_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Primary Widget Area', 'shape' ),
        'id' => 'sidebar-1',
        'before_widget' => '			<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    register_sidebar( array(
        'name' => __( 'Secondary Widget Area', 'shape' ),
        'id' => 'sidebar-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'shape_widgets_init' );

		function main_image() {
			$files = get_children('post_parent='.get_the_ID().'&post_type=attachment
			&post_mime_type=image&order=desc');
			  if($files) :
				$keys = array_reverse(array_keys($files));
				$j=0;
				$num = $keys[$j];
				$image=wp_get_attachment_image($num, 'medium', true);
				$imagepieces = explode('"', $image);
				$imagepath = $imagepieces[1];
				$main=wp_get_attachment_url($num);
				$template=get_template_directory();
				$the_title=get_the_title();
				print "<img src='$main' alt='$the_title' class='frame scale-with-grid' />";
			  endif;
			}
			
	function post_slider($postID) {
		$args = array( 'post_type' => 'attachment', 'posts_per_page' => -1, 'post_status' =>'any', 'post_parent' => $postID ); 
		$attachments = get_children( $args );
		
		
		if ( $attachments ) {
			echo "<div id=\"cbp-fwslider\" class=\"cbp-fwslider\">\n";
			echo "				<ul>\n";			
			
			foreach ( $attachments as $attachment ) {
				echo "					<li><a href=\"#\">\n";
				echo "						" . wp_get_attachment_image( $attachment->ID, 'full' ) . "\n";
				echo "					</a></li>\n"; 
			}
			echo "				</ul>\n";
			echo "			</div>\n";
		}
	}
	
	function post_slider_all() {
		$args = array( 'post_type' => 'attachment', 'posts_per_page' => -1, 'post_status' =>'any', 'post_parent' => $post->ID ); 
		$attachments = get_children( $args );
		
		
		if ( $attachments ) {
			echo "<div id=\"cbp-fwslider\" class=\"cbp-fwslider\">\n";
			echo "				<ul>\n";			
			
			foreach ( $attachments as $attachment ) {
				echo "					<li><a href=\"#\">\n";
				echo "						" . wp_get_attachment_image( $attachment->ID, 'full' ) . "\n";
				echo "					</a></li>\n"; 
			}
			echo "				</ul>\n";
			echo "			</div>\n";
		}
	}
	
	function post_slider_latest() {
		$args = array( 'post_type' => 'attachment', 'posts_per_page' => 1, 'post_status' =>'any', 'post_parent' => $post->ID ); 
		$attachments = get_children( $args );
		
		
		if ( $attachments ) {
			echo "<div id=\"cbp-fwslider\" class=\"cbp-fwslider\">\n";
			echo "				<ul>\n";			
			
			foreach ( $attachments as $attachment ) {
				echo "					<li><a href=\"#\">\n";
				echo "						" . wp_get_attachment_image( $attachment->ID, 'full' ) . "\n";
				echo "					</a></li>\n"; 
			}
			echo "				</ul>\n";
			echo "			</div>\n";
		}
	}
?>