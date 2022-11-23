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
define( 'AUTH_KEY',         '6Y%/&T!x*VAvk;MD%<(B2{NJj1gJD wt Z2aG;$WO`LCqZt;v|AUA=h%d`hnHa6!' );
define( 'SECURE_AUTH_KEY',  '>U4IqWzVVw*.hL9r(&25L()9!{OZYj%qt=vV~bUb;G/<qGQwDgE8=0)6G]cTlsg#' );
define( 'LOGGED_IN_KEY',    '$YJ58NQv5e,b*XI;^GR?xUTLc}?.xWa[=4(S9X3GH0)vyuop_,{k[1f;FGwe,T5O' );
define( 'NONCE_KEY',        '-LVX^5G{Gv4!1S?9AvAy2C8/8P?!f&(t+62G4CX,IS<$kV9JVw+{$Q(fAqAA2@o=' );
define( 'AUTH_SALT',        'sQlbq2s0}[bhgQP%g1v1MErT|+V|azHQeODT;=$u}RrMQX?OZB:!CQs26Z#D~--U' );
define( 'SECURE_AUTH_SALT', '#2~F{xfn`7]lzz.Q)Cd[+FJEY)#:1 #7w,38pG};#64px.l`3t+LAx@j_G6at.pA' );
define( 'LOGGED_IN_SALT',   'Fw0}22BCd y[r8P[EaGc]>d$A}Zh1v-JW.HX9y:kley=5LQ4O{0 )6}(BcQ-l&b8' );
define( 'NONCE_SALT',       'kq+Y^nT|Kj9(B3:U5+0|ZEz9t)RlH4tvYOc+gc@!~08[ftWlT UoL.v4|H8J`tr4' );

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
