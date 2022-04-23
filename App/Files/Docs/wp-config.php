<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'F)X,fBFyBwXzy`mo=N4~0o$F[R~3H$Sh;GIT6DtgSK{I1&c=B*WS%s8Bev[4-~`&' );
define( 'SECURE_AUTH_KEY',  '.I<B9d;PELpoWoVe`g3s;a<{0Vos C)F3(wVX?,{.}1E]*:&ngBsNi?6yB6ji)i,' );
define( 'LOGGED_IN_KEY',    'U8B#O%>~]BzPNgu^i+T_n+a1KChSOgi|wS~5fRwEQeQB5d*JO-p!wD=[2x){G[c{' );
define( 'NONCE_KEY',        'IcKuWT~k--=(do@$5|*<8mACXknc_2#PNm_=D-(oa}@[cI%4<:u+93VqX5~PC}nc' );
define( 'AUTH_SALT',        'KDmLFqAb_m:2[fj*>fk$Vn%vyr*:t[.e0hO-XpF<|.u2=jo44#GH|$x;`y6n:YTR' );
define( 'SECURE_AUTH_SALT', 'T0m%z=veR#N (kI.yh5yU4~5>&X{kcI Z1XWzxNgO;|Jb (g?MbZDg,Dr@}frcyi' );
define( 'LOGGED_IN_SALT',   '1]@`IR:Vm,uq@xRb#Q[ Ac]e}AEF> ;~UmA_oT]xS4dR3o_pbA7h>q$d9lOHzjj0' );
define( 'NONCE_SALT',       'r6t7MSV6WXj^D,sgi;7#57]F1.h#:(_umYc; `9$#k8&>kO!0X@._mAKZW;~}1hK' );


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
