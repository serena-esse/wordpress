<?php
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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '3uc6eIE>v`dC;O{Sr(4s^a=(FS&z +KnJ5_8yX<hWegko]MWMnOBvS,KbvkB5D[R' );
define( 'SECURE_AUTH_KEY',  'WISS9|38v)|x)0f#aKC;na#;1u W1p<QHygOC2b+ypvm`nUBjJLMs nRx],M-na=' );
define( 'LOGGED_IN_KEY',    'rJ5iO/y$yb ]X?AkX-{~M}QL!Ox=cz8 GeMg_,op k)irv~$e~h$T@!{!<,-Fv~%' );
define( 'NONCE_KEY',        'dE0Cy2_t=|t~mB!/Q#cB].QbV`^l2:xYh0jO~4uL@QlezQsm$!|.0IdFz{Doh$@O' );
define( 'AUTH_SALT',        'iyH_H`u<Tw^f;Myod0&batIpJ=|a:Z%d|c7rF>,0_:e)kR$l7-`{FU*)M X) *3:' );
define( 'SECURE_AUTH_SALT', 'lYuyIwL9Sp^5I^d)v rrKX:T}}9dvItu+V^4tcCWXu&I4s{V~*l<m|v_e6IV{c&/' );
define( 'LOGGED_IN_SALT',   'zA~w(C&Ha_MXP(a9e=Bx#QE[=)t|Z aqYb}G-qpEM732(:l%P`Mh$LVW{f%mtlvk' );
define( 'NONCE_SALT',       'v.RFe lgp-fn)R+yr8?j3x+R[p7q&*wjB`t:ai*ef+p}7(!X#&L?JgP[tI^n|ddI' );

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
