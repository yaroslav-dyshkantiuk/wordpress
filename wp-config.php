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
define( 'DB_NAME', 'sport_island' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'LD3#m`[vj~?xLB{P(qDu[UDE9)6BPL`,h+K0I-(dX5ihdbV)2+XoJQu;>-.Iuh[~' );
define( 'SECURE_AUTH_KEY',  'bfJDp$92d}1 !vr,#`JzJ2x40z+$lH(L9U?G7ES;;YWs+]JMSHjpNcR.8Na0WTV{' );
define( 'LOGGED_IN_KEY',    '7<|f?h(f;2=fX)[[[yft%qn!L]uO36?mCZ41A&F_CT/_CC/Rv0@-_oH&clAM]5Mr' );
define( 'NONCE_KEY',        'MNOmDQ7%=C8zany]:Y?tzTq$FXuyYP0LAP3S49$N[:_U0T`g+uF:#WWW,u&mD.z3' );
define( 'AUTH_SALT',        '<<r73iy<:c?bbYfxB/Z{E),k#`ub1;D`VCk!/xU`=-xA4< +j T4K](bvf1P<kZ%' );
define( 'SECURE_AUTH_SALT', '^v 8L&{HKXnK,QU9Ba)}K&pXClA[{#Hit]EPRyBHVdEt-wgXXNz}0y,D!@|i0CoZ' );
define( 'LOGGED_IN_SALT',   'viiIYxlr.8f,Lq:~OEVAYAAEbo5AUC=hhtjNqfegkC)^k``0G,OH=v|uUhHqPqn9' );
define( 'NONCE_SALT',       'LY_k3CD:-2NJ:6Hj.p6+1b#=!ZD$nq!!|pWU|CRbQJ!h;+mGiBcCUp~u|XX`b^8J' );

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
