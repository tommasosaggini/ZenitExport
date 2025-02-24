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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Ud#2-Tgg!!1>n/W7=ly1o*zGhk C{~7{uPyFAf[x`z+d5wF&qsoN16IJRu0+,_f1' );
define( 'SECURE_AUTH_KEY',   'uHV/+W68g1OPStOF@pr^^r[C?amQ>^*n.9kE>@V1/%#+Ypd|,KuyLfIYNr{5O@m~' );
define( 'LOGGED_IN_KEY',     'vTrwwi-PK?4Szh:Ek1x[;%fCL,X-iE8&J3Ht;j3AFo<1vM}(;VlHcpMt ]v5cRr/' );
define( 'NONCE_KEY',         '>}~ejLK1-kW)A:b]9}K0cVK8FlAvm5#AE&Nj$K`lz~U{ogqb$5fv{,Nt5 }W+YGk' );
define( 'AUTH_SALT',         'kBO*q:5nImR2ZN1`B`/uMA@^:s1@p~{&r~Hs@5$mn^v?)>e-FS~Z@R:2[El*ishv' );
define( 'SECURE_AUTH_SALT',  '$=]2Qd*yB8V8anS3Wy#l5:wZ$-w]R8v{wA?ukh!l`L7c,MkUcpku`Hyn5!6Oq@z#' );
define( 'LOGGED_IN_SALT',    ',y;>G%;SXej#]-KF6S~n^lD XPed1OUN)ZUh96ILb27X2a_[zw-a@hDVQSkbmIyz' );
define( 'NONCE_SALT',        'De3**-v3K^Tyn/zai7wuY4}_O`ea=tXZcG%4h/B^i&&.iFb0K%+dP;)$=Yryc^72' );
define( 'WP_CACHE_KEY_SALT', 'I5HS62$x2+B)hZiusU%lrLh/1pUR)`[E?jaITTB]C*Y&.w} ^YA*:%}G}R]r[W#B' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
