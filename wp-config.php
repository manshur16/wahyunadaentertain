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
define( 'DB_NAME', 'wahyunada' );

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
define( 'AUTH_KEY',         'mhbptyiYVRo[SOj4w:.lTz~Jr(h0[MpGGW=<u&Y.?pLk|{Iw]_n@)Y0GE5*AtB_U' );
define( 'SECURE_AUTH_KEY',  '?dXxc?RAv$z}<O0T0j,$QY9EPRND5GN5xYhhdx3F475C`x)v.=j^i-rgfR9lwl|N' );
define( 'LOGGED_IN_KEY',    '!2)dY6GW>q>z%lj%fo@+bc!T!E=sMlO(%YEh1 :UIFn!+#`$k7CaVf+~|%0:@j08' );
define( 'NONCE_KEY',        '<2%6<Y?ZZ*;#zqE425x2D^43PMsx+:_}mp:fSeV<ui?a=$rtm9}oF^oUDJzcw&XI' );
define( 'AUTH_SALT',        '*?Cj9#+/m0Oduow0<i&4?;+VJBO=1`+Q4gmnC(?lii1B/A6sN4Yz8L>m-8s:us+g' );
define( 'SECURE_AUTH_SALT', 'AdRijfNBM.!#&t{4du:sT7ra{`mz)DatO{{:CMX6BR!)dV$uzM/O]V?F[qm]t,/}' );
define( 'LOGGED_IN_SALT',   'K+4^F@)T]wp.@_o`lZc.*;)h]w@zj8[zTVr%#(@p~9D+GRd*t*PBXe8[tE0W~WBI' );
define( 'NONCE_SALT',       'Js J;:I5Zn<w-b[0O:-EFm]|=H=B^7A^cp#][CV8~R(Lv/mT88GjH{>r;mM?{lWP' );

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
