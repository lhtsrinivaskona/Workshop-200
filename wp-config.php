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
define( 'DB_NAME', 'workshop200db' );

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
define( 'AUTH_KEY',         'WoGUm>E>ygC>o [>FGUcN<bQ_,V%0fl[b@=/XbCF;}j{|$wNaDV+<b4s<_#*]J/G' );
define( 'SECURE_AUTH_KEY',  'k#K=O).`uq(rw.2m/,{x:$u|C<r/IZ_Xn2(0Ov=[wzoPpE?R$6%}mlsO*gmE(!{T' );
define( 'LOGGED_IN_KEY',    'wwH7cRI6W^wgtlrQugnqB3i,)C&imBR@e6-q9h{rt41aQ7Uy%(mg3*L)-#fC?g~e' );
define( 'NONCE_KEY',        'w4pqqh=0j257KS~mWYI{*,h9{e@73`0BpakF9P&zlD~0MTqH*9U/3F ,dV@EM)XT' );
define( 'AUTH_SALT',        '=L*y{Uec-)]zPDy+sf[3GA+,8{J3v.[QU]Z2m3UBlR3s65MY(rzMGCNSq+w7-S%b' );
define( 'SECURE_AUTH_SALT', '_=f<Jb;-[_i)OX?0Y*%S)&u~N2+Cnpr}uxXL]5p [/.UTsM~e`F>1gV!424IB/vd' );
define( 'LOGGED_IN_SALT',   'O{OS5?zT?Y-j]B>PJ Ot-<18_ QRf7~t:o/(<e^4,G5~;Z_~ML)i2NUcw( vznnA' );
define( 'NONCE_SALT',       'eP3~3aK(1u-Q0EjJh:u@Sl6Qrlt_vg5y}1(:@sO`nFvy`{1juj>=BIZ*yMB+U[6-' );

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
