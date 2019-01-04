<?php

if ( ! function_exists( 'fivetok_setup' ) ) {
	function fivetok_setup() {
		// WP générera lui-même la balise <title>
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

        // function permettant d'afficher le menu dans la tableau de bord Wp
        register_nav_menus([
      	'main' => 'menu principal du theme',
        'navigation' => 'Menu de navigation'
            ]);
	}
}
add_action( 'after_setup_theme', 'fivetok_setup' );
