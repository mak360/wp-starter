<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <head>
        <a href="<?php bloginfo( 'home' ); ?>"><h1><?php bloginfo( 'name' ); ?></h1></a>    
    </head>

    <hr/>

    <!-- Menu Start -->
    <nav>
      <?php 
          wp_nav_menu(   
              array ( 
                  'theme_location' => 'primary_menu' 
              ) 
          ); 
      ?>    
    </nav>
    <!-- Menu End -->

    <hr/>

    <!-- Search Start -->
    <form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
      <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
    </form>
    <!-- Search End -->

  <hr/>