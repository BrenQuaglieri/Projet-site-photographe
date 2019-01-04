<?php

if ( ! function_exists( 'fivetok_enqueue_scripts' ) ) {
	// Ajoute les CSS et JS générés par Brunch
	function fivetok_enqueue_scripts() {
		wp_enqueue_style(
			'fivetok_style',
			get_theme_file_uri( 'public/css/app.css' ),
			[ 'fivetok_vendor' ],
			FIVETOK_THEME_VERSION
		);

		wp_enqueue_style(
			'fivetok_vendor',
			get_theme_file_uri( 'public/css/vendor.css' ),
			[],
			FIVETOK_THEME_VERSION
		);

		wp_enqueue_script(
			'fivetok_script',
			get_theme_file_uri( 'public/js/app.js' ),
			[ 'fivetok_vendor' ],
			FIVETOK_THEME_VERSION,
			true
		);

		wp_enqueue_script(
			'fivetok_vendor',
			get_theme_file_uri( 'public/js/vendor.js' ),
			[],
			FIVETOK_THEME_VERSION,
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'fivetok_enqueue_scripts' );
