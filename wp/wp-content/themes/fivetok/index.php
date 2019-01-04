<?php get_header();

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        ?>
<?php echo the_content() ?>
        <?php
    }
}

get_footer();
