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
define( 'DB_NAME', 'cnn-wordpress' );

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
define( 'AUTH_KEY',         'iqb:E2g`]].uWB5*yLj~>rXU(+C7+26>T>C;/AZV/w7yqmb#^1PUAicFnx.7zDvd' );
define( 'SECURE_AUTH_KEY',  'G=mZ#y~zpKjOHYFlOj2fsp>kS?c*.PydBSD6*h>`LS6{W5^~TOf`KG.:(+KdF3`R' );
define( 'LOGGED_IN_KEY',    'L!>Wq-sSDp55Z0lu@5}]yDX6uolTVtT4`qs:|aqNw#3x=Av:ofWIz|tnxTa-^#,x' );
define( 'NONCE_KEY',        'NqZi}~T;RN&UIWNYcs__]P$E`LTDu]%U$(rj*9A*/JKp0#wN}ad#@J=gU.y1*88s' );
define( 'AUTH_SALT',        '>z{rQ^:FjFy36k;@+H*N[A:Ix#Fdg$F.c,Z]n,wILLoLVL7SX.{M=^bOSrfVy~dm' );
define( 'SECURE_AUTH_SALT', 'Jns$(9}t# i=!P;uYV;nF]q=d}SO#0LH4K|5dyWQa?fd5)<?,0{O8X]X+K(u0mh!' );
define( 'LOGGED_IN_SALT',   'ytnZQ?):dL tJN7EPtr8kQ&qPh9:}i4X}I5v4bon:ajAr>IVV^Trj^Hue)MMUi 7' );
define( 'NONCE_SALT',       'FwKmna)hn$^[u0xSvSI_r?UIpGcMP?uT2s8PfC* }Dc>>|Ks;x>#J<Wz~gF 2vVu' );

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
