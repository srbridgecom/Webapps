<?php
define('WP_CACHE', true); // Added by SpeedyCache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'holistic_h1' );

/** Database username */
define( 'DB_USER', 'holistic_h1' );

/** Database password */
define( 'DB_PASSWORD', 'c3pS(J79@9' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ppyy7ffviq1bmhsayme5n9ia7bayyxo4w8fbi7mqqdiyj5a3whhjgyxk4dodvnke' );
define( 'SECURE_AUTH_KEY',  'njvlajrjylwpr2nuyrqisxgzkpqbunxtz8b3lnepeafdlehamdgs1c5zyovfleru' );
define( 'LOGGED_IN_KEY',    'r4jybvs4fiyfufpcmcta3i1s16iuguidwiadpg3bbutb5ogxfjx1lw1wh1vpzxlh' );
define( 'NONCE_KEY',        'rl37msndypi9atgjgdi8qxgf5ih3gcqkwv6aeso79eppatnbowe9qzpa80ehj8nb' );
define( 'AUTH_SALT',        'o4ovz1j1po53tzxrxosai6iim2mkujtrkcv9lif1spp2k4wh5f7wkfehtj1um8m4' );
define( 'SECURE_AUTH_SALT', 'xaxfao0uzagona7wpye7zngjnjoxlaiopoyfhmylgd92szceksinvou6vebctms3' );
define( 'LOGGED_IN_SALT',   '3qduroqoxz1jm4ahclhb17al0guqkuzrtylerswls6bqssbyry1fnc8iomelnkmp' );
define( 'NONCE_SALT',       'mvmxassuxd7eeiyrgruoudxnswwevzqvvklju3ugmwuybrjp0sft87tq9oiyptif' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'h1_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
