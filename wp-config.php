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
define( 'DB_NAME', 'Ai Learn' );

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
define( 'AUTH_KEY',         '5ULe)Vw~&F(I/#-,YdO/9r?9sP4iLcS@)LlV$L2is.1JAJ}h!>&E;N)8[-I{L-q!' );
define( 'SECURE_AUTH_KEY',  'o2M`j(Y5fRu*a#J{G+E`R&t_)vIr>6P4,&/#$qh`8F?:=%~`^ya7`ox24`JyL;qr' );
define( 'LOGGED_IN_KEY',    '@*7XOT-~%Nhl?|vw4{Q;|B_(|LpnRFc:G-$+=AE|[T%--Yk/eMF2G{@kQld }>Wf' );
define( 'NONCE_KEY',        '@Wd3vIJuBicx3fZl]Fo+1Z5:!f=Hx(W>Y^6,niH>#bt-F23wz=nF$;nR^@p0-4gB' );
define( 'AUTH_SALT',        ' #1&$M/5~N.C7.&5&f~NNJ^h6wG|7EhNKycoronU(}Ym~0Qg=CL{DSlw&;>o=#@i' );
define( 'SECURE_AUTH_SALT', 'i&b)$Hqv`&_]wCWKPcQB]iJQGZbK81bg]@*jq.1>,HRxER_#6!_64<G}ZDUK%*s#' );
define( 'LOGGED_IN_SALT',   '-Sh>!Aa_M7+jW,sX(Z>.h$nsQp9XKJJV6$fVPXZPYM:#Pc.oX%#8z,J_ni3k<Xeb' );
define( 'NONCE_SALT',       'X|4LJ;qP/GW@J.,<Bnpy &hN5t)Sm(T/ >R3$&Tg115Icq;dsV~Wp6)n+|+vp2ys' );

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
