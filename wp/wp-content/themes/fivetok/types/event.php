<?php
add_action( 'init', 'wpm_custom_post_type' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

/*
* On utilise une fonction pour créer notre custom post type 'evenement'
*/

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Evénements', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Evénement', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Evénements'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les évènements'),
		'view_item'           => __( 'Voir les sévènements'),
		'add_new_item'        => __( 'Ajouter un nouvel évènement'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer l\'évènement'),
		'update_item'         => __( 'Modifier \'évènement'),
		'search_items'        => __( 'Rechercher un évènement'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);

	// On peut définir ici d'autres options pour notre custom post type

	$args = array(
		'label'               => __( 'Evenements'),
		'description'         => __( 'Tous sur Evènements'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'thumbnail', 'revisions' ),
		/*
		* Différentes options supplémentaires
		*/
        'taxonomies'          => array ('Type'),
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'evenements'),
        'menu_icon' => 'dashicons-tickets-alt',

	);

	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'evenements', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );
