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
define( 'AUTH_KEY',          ',1Uecyg%uiY}aW?yK@hT)-D>8kLGr?*>jJsovx|x9mn=lbYz.ydX55@O<,8Ucf F' );
define( 'SECURE_AUTH_KEY',   '-,/cQqQ7QK<Xx?Xm}gDVv=M;cfM,=Q5FZ:A r])/MxQ~$EI!RuOMLUGO80LzWb&k' );
define( 'LOGGED_IN_KEY',     '3mjo1t~pHgUa5i,4SO@DElA`GPTXYU$7 P7V`?sN6BA]g?%(zi?=zw.-J.+]8::0' );
define( 'NONCE_KEY',         '{ RAu}K(d:~ryiMGeX3zL`NlX%1tY)CaM$8l[8?Nw{@fI3J[)fNd[OUA[<#1plU?' );
define( 'AUTH_SALT',         '2px*a|bT^`]yB^``n<gX-Rq-*v.!T2|kIW[;BvITju^Y=tC>lxCKv.[2:,#T*8QY' );
define( 'SECURE_AUTH_SALT',  '?K+*9;LI2q-lGY!M%$aUF)CZktVy.mT~>uMtdpE TjD*vV[sc:A&K|VF~_PL<nqd' );
define( 'LOGGED_IN_SALT',    '%N&Uzf0X2jj-}RC@ZwSm~&{ggE${AMM^mt!^>1To3RKO&<aWU2{S$myeS/tO`U/L' );
define( 'NONCE_SALT',        ',FOx>8sCAu9o8mO+/n>{3@A5Qx!.Y :<jM7*Q.K/PocOD{b}>E+uyL&vAoBXPR-S' );
define( 'WP_CACHE_KEY_SALT', '/B2{vBg|.S-$NT4r;x6O];%J<1$-~xvNqu[3@9.j8%tqq{,BlKL/ke@u=|A*ubn7' );


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
