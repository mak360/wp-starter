<?php 

// Basic Setup
function wpstarter_setup() {
    load_theme_textdomain( 'wpstarter', get_template_directory() . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
}
add_action( 'after_setup_theme', 'wpstarter_setup' );

// Register Nav Menu
function wpstarter_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'wpstarter' ),
    ) );
}
add_action( 'after_setup_theme', 'wpstarter_register_nav_menu', 0 );

// CSS & JS
function wpstarter_scripts() {
    // CSS
	wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    // JS
	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', array(), '5.0.1', true );
}
add_action( 'wp_enqueue_scripts', 'wpstarter_scripts' );

// Pagination
function wpstarter_pagination() {
    global $wp_query;
      $big = 999999999; // need an unlikely integer
        echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'prev_text' => '«',
		'next_text' => '»'
    ) );
}