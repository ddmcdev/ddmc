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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ddmc_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'LwhR:H/]Tr;8Y>DQvl&{q[Sn5N>A%24w0Wmi%E@N*_U6L/,aC qxOv(t.eQ(*W?k' );
define( 'SECURE_AUTH_KEY',  'ZqHl=~g)w7V2qC%IC96rOok4G$~w?)-7w5A.M(Iqfen3C2Lb_U3vb%&u6e1*`H6L' );
define( 'LOGGED_IN_KEY',    '$tM I{FOs;qFB*oG>CmUJ$B0?X|9N=v:s5c>tb5179Nv>pzI[][7 <ck0bXzW7lQ' );
define( 'NONCE_KEY',        'B~(+!Y$Hk~*-ETr+9A*YPf|hOm6:e6xJv6es_r:FwQvw-B50VopuISH ir^i)h>_' );
define( 'AUTH_SALT',        'GH*zH6FW1i>b^q]I<!}C_^M$}pcbA)su1{|PA2UK8s/9p?(^2|-Ih.!G?mBL(=AW' );
define( 'SECURE_AUTH_SALT', 'v{p*i(?WZ]a1=mz7.?69[dA]J:GtWF>#O0gZiqnp]I7`]{{ppC5YCnT%k~cYg?wK' );
define( 'LOGGED_IN_SALT',   '~T-wumrPeAco=%gAkxhug5Gw:|.]VVpax`yoei6rq.m*zJ_5<e^E|8alDIH<w?p%' );
define( 'NONCE_SALT',       'k4>Zv$J~n}yEB].X|Tm|tIoEGwDJx3wdsLa-|E=%H~[*i-2<ighff}zyqIlVX%!:' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
