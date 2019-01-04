<?php /* Template Name: Séries */ ?>


<?php get_header(); ?>
<?php
$news_query_args = [
	// On veut récupérer des articles (posts) (par défaut post_type est défini à 'post')
	'post_type'      => 'post',
	// Trié par date
	'orderby'        => 'date',
	// Les derniers en premiers
	'order'          => 'DESC',

	'posts_per_page' => '',
];

$news_query = new WP_Query( $news_query_args );
?>
<?php if ( $news_query->have_posts() ) :
    ?>
<div class="content__list d-flex row nowrap col-lg-9">
    <?php
    while ( $news_query->have_posts() ) :
        // On charge les informations du post courant dans les variables globales utilisées par WP (template tags, conditionnal tags)
        $news_query->the_post();

        get_template_part(
            'template-parts/posts/posts',
            'excerpt'
        );
    endwhile;

    // Permet à WP de reprendre sa boucle principale
    wp_reset_postdata();
    ?>
</div>
<?php
endif;?>
<?php get_footer(); ?>
