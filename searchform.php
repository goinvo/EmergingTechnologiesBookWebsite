<?php
/* The template for displaying search forms in emtech
 * If you want to customize the markup of search form, do so below
 * @package Emerging Technologies
 * @since Emerging Technologies 1.0 */ 
?>
    <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
        <label for="s" class="assistive-text"><?php _e( 'Search', 'emtech' ); ?></label>
        <input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'emtech' ); ?>" />
        <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'emtech' ); ?>" />
    </form>