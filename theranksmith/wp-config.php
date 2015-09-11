<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'theranksmith');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '+#n?fpvKsK+8y%#SFLqbl.4a&e?kix)S4;tihkqSb|LuK<r!HPCoyM|g/N~Hj`Lw');
define('SECURE_AUTH_KEY',  'PL^5+sB-[aHg#3CuH+GYeFGb*}5/ylV_q?SKs%T=dK,eembLR{xs)R;Ii^ ?! GX');
define('LOGGED_IN_KEY',    'b6;1X`ir!_1-)aZ&Bi~Cdp2q@s|gtd+|-{d!kj7j(b[=}u#*IY+yIBxz60JV<MxO');
define('NONCE_KEY',        ' C;`U{-5nfSaOK1zYgdb;aC9HWd/.Q}.+~HfJ[ZW-~g:VmYqI_V+Z_DgeZ <|@uA');
define('AUTH_SALT',        'Hi92U*,9.-;NYz`|#k~|bAwBDz8iP8%Hqm ~uk+x Q|dSsoI-;++-xr=tyW_0V[A');
define('SECURE_AUTH_SALT', '3 a8(~A#![M_htadOs8Z #KL/;WA0HLpIBA+D*fvx&@7G~xgH/Z0kc-,nj,hEUD,');
define('LOGGED_IN_SALT',   'xVltN|4_B8xI-v~QBM~.-D97R]&]V$G1jF?c/?ay7hd]W}nu;[FU=sa nH2A<B28');
define('NONCE_SALT',       'KvyK}2XIC3KN-_9sQ%F+CT.JD .wB6a[~HLA+Ad/BtiDN<b8;F%)/C+ LEhB3i*4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
