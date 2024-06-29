<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbmyseb' );

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
define( 'AUTH_KEY',         ';_e>1Utzb0L*jA)itAW-TP5mFpMY)YIy1*Bf3&@0TL{fRv3g)g6UZqE&I95-^i/L' );
define( 'SECURE_AUTH_KEY',  'opU5YN}p(WKG#h7y<7?{N+D,nEgygbYIh4:a2b;YBLih@,{-n,[AQ1^oj>u<nH&k' );
define( 'LOGGED_IN_KEY',    '2;s&p:sZQa4O{%bPwq?ms[g:%Y{V|g2^tvN[^c$u3,fitBAJR.v>; 9,tOnG{r*|' );
define( 'NONCE_KEY',        '| mF|p}1r9Or(Z,DMRBIHkx}7Rc!4+ Qyo/uhT|t!)Gm=id-b/b An>U@>,DUJdj' );
define( 'AUTH_SALT',        '/b_Y6< em*larDb@PkgbXVBO;sx@fq?|p2gAzMwlh4!L@+EBKc-X=H^mW !xNA: ' );
define( 'SECURE_AUTH_SALT', 'T{R<Gmm^s=>kT&j35] ]))-<<!=7M|gO7CguJ=4Zm+7QX#9npREPx&y`K<N}B`qL' );
define( 'LOGGED_IN_SALT',   '+LXuH?sHMtiE(hTz~+e.*$JguKtoJ(!bulH]`%~T3Toy)YvKWq<1X,+K8o;Lrn/{' );
define( 'NONCE_SALT',       '&%ffAB6L9_ss)Aud{q]#ic1U2)=Vzm`-bR;ds <>E`UFSi=`Yx4ai0O<La6xI8h&' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
