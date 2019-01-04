<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fivetok');
/** MySQL database username */
define('DB_USER', 'fivetok');
/** MySQL database password */
define('DB_PASSWORD', 'fivetok');
/** MySQL hostname */
define('DB_HOST', '217.70.188.98' );
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f|So(QMu{kzZu(/+zgoO}_&0bQLmDrgq]f12D_X+te-VRo1f.bnbU#!-IZqEa38g');
define('SECURE_AUTH_KEY',  'P,m|8X@$veW/.mHr^++=Vy5;W*jSYII2sQhG#<fyIF^0g`$0G1W4!y~e-P>|Z:zw');
define('LOGGED_IN_KEY',    'Ar[7}V{{^$>0pYk%&H}1f+.e)9;|JFRP&QQ<_)P`+k<RV=Nj)B>Q-wki~sWoI->>');
define('NONCE_KEY',        '6oheQG6ef!=l)O;YE+uF*-o#6%zHQ!J#S7,.;]3*;^5sL]/V79A1XppXB&dnmH9|');
define('AUTH_SALT',        'V~[Y}WD#5;jLqR$|O`sKvOQXE(g)DqE6]q.:@8#IHSFuCV29m8Gq?{,4<pO_U tj');
define('SECURE_AUTH_SALT', 'lJ6GqnEpF;P*aji{WC?5,~!.#LMi^h&5~7i9vbX:o7`+)qlT_wT+sv`h[7)yqs|A');
define('LOGGED_IN_SALT',   'gJ_>lwa[So+4k4u(.9t]Az[bswlQzi|Q)5@:G<N5mg=Nvs}-lchu`2r3IcuH.6)|');
define('NONCE_SALT',       'g0h2EWKtnC`([-}_Lg(dk7a&}coX/l{h;EN[.}w8+-V9k9dDsj|RjnE%L91RFwRN');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
define( 'WP_CONTENT_URL', 'http://localhost/hyperspace/Site-photographe/wp/wp-content' );
define( 'WP_CONTENT_DIR', dirname( ABSPATH ) . '/wp/wp-content' );
/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);
// Si WP_DEBUG == true (en gros si je suis en train de développer)
if (WP_DEBUG) {
	// J'affiche les erreurs
	define('WP_DEBUG_DISPLAY', true);
	// Je n'active pas le fichier de debug
	define('WP_DEBUG_LOG', true);
	// Bloquer l'installation des plugins & des thèmes
	define('DISALLOW_FILE_MODS', false);
	// Désactive l'éditeur de thème en ligne.
	define('DISALLOW_FILE_EDIT', true);
	// Télécharger directement les plugins/thèmes/langues/maj
	define('FS_METHOD', 'direct');
	// Je désactive les révisions en mode debug
	define('WP_POST_REVISIONS', false);
// Si WP_DEBUG == false (en gros si le site est en prod)
} else {
	// Bloquer l'installation des plugins & des thèmes
	define('DISALLOW_FILE_MODS', true);
	// Désactive l'éditeur de thème en ligne.
	define('DISALLOW_FILE_EDIT', true);
	// Je n'affiche pas les erreurs
	define('WP_DEBUG_DISPLAY', false);
	// J'active le fichier de debug
	define('WP_DEBUG_LOG', true);
	// Je limite le nombre de révisions à 10
	define('WP_POST_REVISIONS', '10');
}
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
