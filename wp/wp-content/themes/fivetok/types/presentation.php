<?php
add_action( 'init', 'wpm_presentation_post_type' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

/*
* On utilise une fonction pour créer notre custom post type 'evenement'
*/

function wpm_presentation_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Présentation', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Présentation', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Présentation'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toute les présentations'),
		'view_item'           => __( 'Voir la présentation'),
		'add_new_item'        => __( 'Ajouter une nouvelle présentation'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la présentation'),
		'update_item'         => __( 'Modifier la présentation'),
		'search_items'        => __( 'Rechercher une présentation'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);

	// On peut définir ici d'autres options pour notre custom post type

	$args = array(
		'label'               => __( 'Presentation'),
		'description'         => __( 'La Présentation'),
		'labels'              => $labels,
        'post_mime_type'      => 'image/gif',
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'thumbnail', 'revisions' ),
		/*
		* Différentes options supplémentaires
		*/
        'taxonomies'          => array ('Type'),
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'presentation'),


	);

	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'presentation', $args );

}

add_action( 'init', 'wpm_presentation_post_type', 0 );
