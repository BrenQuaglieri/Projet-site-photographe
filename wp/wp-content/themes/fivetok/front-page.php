<?php get_header();

if ( have_posts() ) :
    // Pas besoin de while, je suis certain de n'avoir qu'un seul article

    the_post();


    get_template_part(
        'template-parts/posts/banner'
    );

endif;
?>
<?php
$presentation = new WP_query(array(
 'post_type'     => 'Presentation',
 'post_per_page' => 1
));

if ($presentation->have_posts()): ?>

        <?php
            while($presentation->have_posts()): $presentation->the_post();

            get_template_part(
                'template-parts/posts/description'
            );
            endwhile;
            wp_reset_query();
            ?>
    </div>
    <?php
endif;
?>
<?php
$news_article_number = get_theme_mod( 'fivetok_homepage_news_articles_number' );

if ( empty( $news_article_number ) ) {
    $news_article_number = FIVETOK_HOMEPAGE_DEFAULT_NEWS_ARTICLE_NUMBER;
}

$news_query_args = [
    // On veut récupérer des articles (posts) (par défaut post_type est défini à 'post')
    'post_type'      => 'post',
    // Trié par date
    'orderby'        => 'date',
    // Les derniers en premiers
    'order'          => 'DESC',
    // On veut récupérer au max 5 posts
    'posts_per_page' => $news_article_number,
];

$news_query = new WP_Query( $news_query_args );


if ( $news_query->have_posts() ) :
?>
<div class="content col-12 row nowrap">
   <!--<h2>Séries</h2>-
   <hr class="content__hr">-->
   <div class="content__list d-flex row nowrap col-lg-6">
       <a href="#" class="col-6"><h4 class="col-12">Séries <i class="fa fa-arrow-circle-right"></i></h4></a>
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
endif;

$event = new WP_query(array(
 'post_type'     => 'Evenements',
 'post_per_page' => 5
));

if ($event->have_posts()): ?>
    <div class="content__event col-lg-6">
        <h2><i class="fa fa-calendar"></i></h2>
        <?php
            while($event->have_posts()): $event->the_post();

            get_template_part(
                'template-parts/posts/page',
                'event'
            );
            endwhile;
            wp_reset_query();
            ?>
    </div>
    <?php
endif;
?>
</div>
<?php get_footer();?>
