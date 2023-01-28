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
define( 'DB_NAME', 'wptest20_db' );

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
define( 'AUTH_KEY',         '.z~vRexy[H#Lvr8QyYj#kUyn|dG%7a;UQ2Rt]Z82y;]rgr[(MVg#2*L:d[0Rv|vV' );
define( 'SECURE_AUTH_KEY',  ':m[SwK>u>2UvL5v8FO1C2iIej1;#:j[&M~$Z({r6=c3& MD.3nH2mI/p%OPgaWP<' );
define( 'LOGGED_IN_KEY',    'Z@s7bU(imHiLc tZ(/qV0a;ZI|TeK}M`shD(2hGNZ].XpIz[(kN8JaI:~kw0`ay#' );
define( 'NONCE_KEY',        '[LM6`O%87Sk{Dt$-E9Bga?&pc)Psb?UOnswIHn2shjPb$A)&}`pdl-#|TK$vN%<m' );
define( 'AUTH_SALT',        'm--:DY!cC*(xtJxm-v*E~SaL)6Y>MSoj =!lX!dIr6M4R{tUX:).s4O{z|R>4wfn' );
define( 'SECURE_AUTH_SALT', 'G(/[:-UHqPYfOxv}0(z_KDE?GOQr}`O5J821(12Pfe=$6Xy{brhDq]_^3jp<B=~2' );
define( 'LOGGED_IN_SALT',   'j=<+dno) $syO4F#nH&.pQ+7&03%S~q@mUmI;~T}D2%3G!qZUzLuYdqPir$g}W@8' );
define( 'NONCE_SALT',       'i|n?Do9lwX_K4gu45=2m1p[x=sd0 _kz&K1KAb~KZmmkfl$Waxl[}G +|{(fcI}Q' );

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
