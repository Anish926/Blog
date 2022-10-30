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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'MH1ewD-z!!9iA|>2`,,:L*-mB^JFlA$[zC.L!:]HB$*YpB9Pk;;.?s}#XBdf6J/!' );
define( 'SECURE_AUTH_KEY',  'vY$>c^NXD9I%5Rwdd_HiLRnzSgEc{WW(#OTr)85A_BS]4.I/4542X%]=eTW|@ &%' );
define( 'LOGGED_IN_KEY',    'u,{Oi3Vhtrcg8kK0H0$T3wY_ra}f%LbO?:]F5}&H#<f#!Ng7|ZNTw:1#Q;pqqRp#' );
define( 'NONCE_KEY',        'I^7oEWPi|5<>US{QYf!?%H#ubDX?OQX{5z2ri[/6VGvCzi;h2=6<7Z.>/*t{GA*T' );
define( 'AUTH_SALT',        'roWUN1CWdj2u`g:vO)lM6w.eLEYWLz*ZZ lU7^^og+uVY-vK@J!2}Y`j)~B@W6;e' );
define( 'SECURE_AUTH_SALT', 'b2IA)E:{}.nAwaY!#r}~ccx,}Hm>vgPyZlF*8]wVaw6;)J}egb4Rwq|Elr d0:/|' );
define( 'LOGGED_IN_SALT',   ')pFg=GmfGj>i9ORiE<7XGZ(JHts/!+8%tZ4@FQWH*.A6#6GVn:Ei(Ws^q3Mh(Yy:' );
define( 'NONCE_SALT',       'X&G@w2XMY|sU+=bu!V10h(#~{Ea(`!T!.e_8~s#w`xOLSW5A}EkBJo9Zp(v0;WJD' );

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
