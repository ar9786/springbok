<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sprinmqd_springbok' );

/** MySQL database username */
define( 'DB_USER', 'sprinmqd_sprnbok' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lYaluozRzH9+' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?nvX(Na{O`4JT(J8L_=azAMIyR3BBhqHHLaX)p)``=D,GLmqK8PKU>eQ|Pwi7&wJ' );
define( 'SECURE_AUTH_KEY',  'r?BD9TX5kLo/{|SWB#e%MlPY*]<e:as0M: bNjlRw&t]KC4JjR_Q[L5[+c`>rW^*' );
define( 'LOGGED_IN_KEY',    '1&+%t5VM}CsJw.$6-;|[pbI<a@<1OJL=iDOzpD1S?SQ/NZ@2gCeQ~Wy$4|S Q#WA' );
define( 'NONCE_KEY',        'f}Kc^;?+2bM&i.jrz#rw3-}7D(3ouLeys+5qz-ivct]Ihq|d$$C@Prm~.jat}?!V' );
define( 'AUTH_SALT',        '1]oFOoIZve~)?[VMoUW5*x%!g-.e6=qDV,#E/.SK8kh9)E,F>M;Id(U;P`)V[P$*' );
define( 'SECURE_AUTH_SALT', 'b)W&]m?C#qp?6eYhxHrFE&0{@.]c^.fWOVR>M9*cI0YBFIV<[6j:m!!#L Jo%S+e' );
define( 'LOGGED_IN_SALT',   '3`}bi0wh(<XHE(*q?9>*zMAIL /.AY)mPA7(Vvc<>Jh D+}CI#IG QGp>J(,YZ|$' );
define( 'NONCE_SALT',       '54S26=WA0jw/+]qVt>c}gv?+Z o;UvWS$9x`YwqohnJVXe:9PVGj[_8R23,h/:1X' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
