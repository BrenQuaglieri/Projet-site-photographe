<?php

require_once(ABSPATH. 'wp-content/themes/fivetok/types/event.php');
require_once(ABSPATH. 'wp-content/themes/fivetok/types/presentation.php');

if ( ! defined( 'FIVETOK_THEME_VERSION' ) ) {
	define( 'FIVETOK_THEME_VERSION', '1.0.0' );
}
if ( ! defined( 'FIVETOK_HOMEPAGE_DEFAULT_NEWS_ARTICLE_NUMBER' ) ) {
	define( 'FIVETOK_HOMEPAGE_DEFAULT_NEWS_ARTICLE_NUMBER', 5);
}
// On configure notre thème
require get_theme_file_path( 'inc/setup-theme.php' );

// On ajoute nos fichiers CSS et JS
require get_theme_file_path( 'inc/enqueue.php' );
