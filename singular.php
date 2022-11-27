<?php get_header(); ?>

<!-- Post/Page Content Start -->
<?php 
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
    <article>
        <a href="<?php echo get_the_permalink(); ?>"><h1><?php echo get_the_title(); ?></h1></a>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid">
        <?php the_content(); ?>
    </article>    
<?php
    endwhile;
else :
    _e( 'Sorry, no posts were found.', 'wpstarter' );
endif;
?>
<!-- Post/Page Content End -->

<?php get_footer(); ?>