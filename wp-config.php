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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'TW(/#P`x807pKCGP`9hb)!T*0BYY`#atdm{zL]T23x%_s3]c(WBY3O|jCl E}^e#' );
define( 'SECURE_AUTH_KEY',  'S|^1=^0<@(E_}u#*a-8:)/K5c1VuoZl&(qXTyHlh3rQG#{9`j~IV|%NR3VW*_y,+' );
define( 'LOGGED_IN_KEY',    '_R,E.kJE,K_/^y&LTrYk$vUW8}FWY+qU5R0W$0.tP>x,862@0{ [(9z%4mI%U8@}' );
define( 'NONCE_KEY',        'Sl M]vdK+!@s :%w&V?t]36KNY]^-92M;C&[uX6RaD_d~o.^0_b/1jP7yJy7}?~I' );
define( 'AUTH_SALT',        '~u]^gmnLbhm(khMR`zXfm!T(qAc<0n-~_M<v<*Z-2Yoc~d}Ur#DoKB%[)OvOMY;}' );
define( 'SECURE_AUTH_SALT', '-]sQ4%RDRr-uDm*OVU)vG$?SxV8v-J|y6*v#~$hI7mJw-oFI`EE3CGkR].NYF3Fz' );
define( 'LOGGED_IN_SALT',   'Wdo!7)bom1CTA_<fucoS=3xF+%b(:U[~uHby|ptsT}ZM897__,2WcXROwOL!K/|p' );
define( 'NONCE_SALT',       ')w.v<BdKO:1ZH7?>_d*xMssO`k;mfx5.-Ve#h:#Ba@Mb%TMW~Yu.nc9*?,Jd6Cg,' );

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
