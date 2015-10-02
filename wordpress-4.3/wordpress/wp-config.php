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
define('DB_NAME', 'theranksmith');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!Dm!?Su8b{DG?JKT&tjCfQ4ySSVW^yp$YU0NzW ho=QWd;T{P`u:!1`[~u;k$183');
define('SECURE_AUTH_KEY',  'H08g9RQOsgXM@XU5dKWmY3~wQ79V}JaVhe@d<8fE(Uy<M71{ga(w<Xg1A G({n/B');
define('LOGGED_IN_KEY',    's,&b)KkGcG[R>Q]To<v>Mhc(@~mL5SLB!nhZJ_(N|[VRTV F`/Fb+8V8zX0e%z*L');
define('NONCE_KEY',        '!JZ=?,tPrpNr>bO$`ZA#b*WiEdEdL!8Iio1s]`zyZ<H8*MH?d|.AdEA5z}~emPfh');
define('AUTH_SALT',        '%Nx]<pv62lXA)K#1bz/7zFMZ6T9hOKHQz4jAW}QWqR^6OQ7!mSX;F#4Tc>SPHc?{');
define('SECURE_AUTH_SALT', '^b;l-G6&hl`wS;{!*<g)PxS[m,_K:2$<Tiy.l5-<,>~S#|93|AQ=G]l5cL}HiYo>');
define('LOGGED_IN_SALT',   ' RiB7F-)FYXc.#9cA/lo4YV01t=l&RSd|lafcK5GJB@*2*Cx7YM}`[~6= YnrQ%[');
define('NONCE_SALT',       '|pz2k{)IyeeF!7O.U>t,:_8MY&rK2e|WQ3p0a2cZq3xe^~G%BEJFs25906DFd]A<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
