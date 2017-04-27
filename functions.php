<?php
/**

 */
	load_theme_textdomain( 'NewTheme', get_template_directory() . '/languages' );

function NewTheme_enqueue_scripts() {
  /**
   * Load our main stylesheet.
   */
  wp_enqueue_style( 'NewTheme-style', get_stylesheet_uri(), array(), '1.0', 'screen' );
}
add_action( 'wp_enqueue_scripts', 'NewTheme_enqueue_scripts' );


function NewTheme_wp_title( $title, $sep ) {
  global $paged, $page;

  if ( is_feed() ) {
    return $title;
  }

  // Add the site name.
  $title .= get_bloginfo( 'name', 'display' );

  // Add the site description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) ) {
    $title = "$title $sep $site_description";
  }

  // Add a page number if necessary.
  if ( $paged >= 2 || $page >= 2 ) {
    $title = "$title $sep " . sprintf( __( 'Page %s', 'NewTheme' ), max( $paged, $page ) );
  }

  return $title;
}
add_filter( 'wp_title', 'NewTheme_wp_title', 10, 2 );
