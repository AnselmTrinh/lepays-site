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
define( 'DB_NAME', 'lepays' );

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
define( 'AUTH_KEY',         '>uPc->$|),1B%BVCJ]:kH88MAP~|1S(MxR|LW!_{cky!FzJUN#BQ.$$;J#y=V?<w' );
define( 'SECURE_AUTH_KEY',  'ULThb}dE_{kU3i<m/vYpg4=,o%gvC|m3XB+TPK>h]kvE|jRn4Io3^3l|Zd2eLlbq' );
define( 'LOGGED_IN_KEY',    'fCQr6j<x>O(P9)iAS,h.Ro=mqIKdMJo]VLNu,8M[0GV9h@ S$i$v` CEgpq8_ dT' );
define( 'NONCE_KEY',        'Q!1d7@)<);+RIjcC}[`HKA8_b>4[)igdc6_qAj3&/dmahQ0Ny IdKc#piV^hC2_G' );
define( 'AUTH_SALT',        'L?S/@Vwu*epzUc#v_Z&?O(jZ$XM1<B 9GlFsfu6!2$ AYAdm[%apdEd=EEb:2xhN' );
define( 'SECURE_AUTH_SALT', 'yIYPzytmw|?(C|dnGSszi%=X{>p^HMgl!{bQB KE=yA0z}6p*.B0WTUY7Jh3(bd.' );
define( 'LOGGED_IN_SALT',   'c_mmUq)%rG2(Z)GsRsP5[Fd>5^2pN8x/_?2 <(9W6|f;+7,]/59>D3EDun 2&O(0' );
define( 'NONCE_SALT',       'CeieBPPA|d1f{U?~+D^<L)-Tr{tyK&$|= S:hXU4|8Y]gcnW#^a}T4AN<(;4>P>W' );

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
