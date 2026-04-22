<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u196492182_QYaWn' );

/** Database username */
define( 'DB_USER', 'u196492182_NGpVl' );

/** Database password */
define( 'DB_PASSWORD', 'GjdxrRXrBd' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'gO+{@I6dY&~;T+$N,[t!%yO8eWQI<K/b9{Sv6U5}h>nP^20B>sC9<Y;;7i2=67lJ' );
define( 'SECURE_AUTH_KEY',   '<i>Br}>{54-%cm#n{Goadz7V|Lk7vbbg/A_OBUSQ1GnK,xMMVz3QXR!(wz6`=D/h' );
define( 'LOGGED_IN_KEY',     '2CrDv;zqV%Vbo8Z^VFZ(5uLY5BM}@zBs,}PZ9J[L{49`)GKQZ`Grh>Ni8:3Pnc)q' );
define( 'NONCE_KEY',         '<#xZbl-$oIkDE9mh`dUrZRx9(>]r|TP+8gRQUXVABsH9L;+N)PXoPamu`?fQ%MM*' );
define( 'AUTH_SALT',         'BM2iGz_OwDtuwAF|o3;YDg5xUcZ#RWn/S%u<=S=ETCRT.ZR!6AYXTO{#1b1n3*rw' );
define( 'SECURE_AUTH_SALT',  'bt^v|Uq2vG:S:=?9W4;N:vve_n-TuA`O*6%CY3Yf GR|d;(V,pkIGn$oC*.T+_!P' );
define( 'LOGGED_IN_SALT',    ')VP^&4R-Ou{k`1z|U0(9-hby{W9C@w]Ee.Catv*zwW])<e1QyxsM%p(N|)xKGb}N' );
define( 'NONCE_SALT',        'W^%H03#klc=qF9HMh/ATBfXTDl|OV EVy2vww KGU<q9]!/wky.h+zQ%V2OcL&pj' );
define( 'WP_CACHE_KEY_SALT', 'Iag.|*n_m4}v5O+.o+mz5KS[4jtR9BS.!x05H9:.NSuHA<:2]~^A)h&nWbMg ;?S' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'bb4d7b22bc7737cc00d5662d295e8a1e' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
