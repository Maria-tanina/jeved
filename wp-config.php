<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jeved_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'z1jZ{8St^RW`N(^89d-T0*,Sw}mS-xK9nLLra?hV$^9$)D ~ ]$1(wv6x2q1V-x2' );
define( 'SECURE_AUTH_KEY',  ',n(HMfbW@ JZ{[YGES0O=u%/3i+z`l-*^y[` fFp^H4U9HUvyv*+hDKI)CSS^F6S' );
define( 'LOGGED_IN_KEY',    'g%9KffJ0PT=U{h?`*i-Au4KxzD4qY`#4)*Ieo]#If,.Y^6}{^xo @FN5c3k77,R.' );
define( 'NONCE_KEY',        ')uZ%RMrg#Ei~UpbmTB;C7?|3g>^S7J]3+L,IY#~(|48]3o7q)/7wTt#dJlY-Qh./' );
define( 'AUTH_SALT',        ':e&1q$DPu03Nxse2mJXR%@tThSsBjJBasq:|yz%6_fFZ[I}!^}v;,o3?e1~W*hk#' );
define( 'SECURE_AUTH_SALT', '#7*5?qR~x0 6*XTPFANydr2gwlIs-mx#u`6D4g+~3u6?j%zi7)Y/!qn?zQSS76T|' );
define( 'LOGGED_IN_SALT',   '<.0)O>h$.UX=s+sG GDA9ih5MaU/y)A0cXOC4:Y.@5tUWjL7F~JKSbP)s]B?JDA.' );
define( 'NONCE_SALT',       '[$edT`nT@=sCc=AL-. yRtH{@Bm -B9e:_$_(;]-#SOKSMGncIA#YLZeiil.lrrC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
