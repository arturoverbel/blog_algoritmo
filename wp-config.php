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
define('DB_NAME', 'db_wp_algoritmo');

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

define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R(vzZ0-YgWW~fYJ&*l|<C=sv<F[me2RIlK4.q>!.PBE9-Du/8g=i-E^LozpY[6x+');
define('SECURE_AUTH_KEY',  'te>EHT<9yui6^=+iO~LI#L.2~kmEEHVg<P@9W.$q&Of]aq0wAn4J{Ot(Pmge.Hz!');
define('LOGGED_IN_KEY',    'oFGMx]x^BY)M`^gG17jl9Gt[ecfHN/mn$}?k:pgBy%XQK=-GB]y!vl:zx +&&.bZ');
define('NONCE_KEY',        '8<V,VlM.SR<0K3[xx~*9_oi112+ESy~x}z1>1E:$j5$E9m9D^7jx-*Y2@-i,n:Jb');
define('AUTH_SALT',        'Xi}zdDBuH1Et>MCRu91<M/@Rz(!xk&0q`^oNf(|Z*YoIFtVf`2dA^(eT:C} >>u<');
define('SECURE_AUTH_SALT', 'O58[d4m~^Wsjwmwy P$J<V$OQl`aELiSHQod0[oOiTiBo7W7UVgL`xlisrn`s[XL');
define('LOGGED_IN_SALT',   'SE^nI1^>Yh/%,DA&3WFL2gi`)0cGc* s+an$3C>e5zmq:LR6[ST[g:%35fARc!/>');
define('NONCE_SALT',       '4]]2TiUM-`7#Z:qn].0qX]+-|D]w_ *&F)Ffkct|7<{dqIGhKm+}8gtOjP.${K^^');

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
