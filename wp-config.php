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
define('DB_NAME', 'kt-local');

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
define('AUTH_KEY',         'h@_W)Gg$D=?k7u$4*7,w<O_ehz]e-NsZfoh|)u_jzI#-!(R|$L`tT:n1%UA`awNO');
define('SECURE_AUTH_KEY',  '[;^|8|VV{NiVwP*X|X[BArg0QeID&:7`&Kfg-|.$?lJDAJ@D6N*~+&2`f$jL-Ea;');
define('LOGGED_IN_KEY',    'IcNRB*!U(!!Sk,{AATXDQ$Zw^/w@CqkVf[Y]ut4;?R]og-cAve`}KEaSnM$WL3@0');
define('NONCE_KEY',        ':@,ar.D6@+R/J[Z@(/H)$fAG;>wK]u9ZNai,jC7/z.m~5(C@:aVbE| 8}-DdH<R7');
define('AUTH_SALT',        'f]lB;+gJz=D:^mFk/gZG?iXw{x6MEl2A3QN#B}b#kx:0MH2+/`Ud0(ia&Oe|H(:d');
define('SECURE_AUTH_SALT', ',t2+<65@W(QewO$YkW1R#)S|+oWO?kV/|R1T`Zn#N^Ac]<-!<4]!<CT6S/i,l-tL');
define('LOGGED_IN_SALT',   ';gm<O(pW8ZMkVu+Qc|^mNih,I; il0Du63fI-z!h+f16:ct6J25xkK0ABE*Vr:mi');
define('NONCE_SALT',       'SwUO7%qIBM|UqGftHY_8jsNtEce|k^Ioxq_km5&Rw+TPzvTA6H!jYp|Z^}r)Fo*C');

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

/** increase memory */

define( 'WP_MEMORY_LIMIT', '96M' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
