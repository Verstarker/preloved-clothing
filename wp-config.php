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
define('DB_NAME', 'preloved_clothing_db');

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
define('AUTH_KEY',         'v*5OztY:QsYb_`{MzN*0`,mAAir`UpfW]`GxmS!r-4_#eN]Tm,$V}fh[]0(:d+X0');
define('SECURE_AUTH_KEY',  'AqD%$~pMr6SH22+Ih1*f/bgY[7p#u_v|PZ&>d:ro57/>shNh}t,3,lzc(>2%5ywb');
define('LOGGED_IN_KEY',    '+e*vgE*X]%VRX?sF9BuL(xHl(|#}E^+`bEh_pq:Tqh<KG=BN5Nfe@>f9{L85tRRp');
define('NONCE_KEY',        'Z03G/<x)%L.QhtT`6qyy;siJg&iv,|(|OxhhEIS&(L^YqXfdCRB^2zb9@O$c7+wp');
define('AUTH_SALT',        'Hi[K:)E#930tdck !]8wrn8*~c|M<d<=U*Cr:_$W&}*Q^4:%m5ox9J(/4W:Fm )>');
define('SECURE_AUTH_SALT', '=o.|L>vkFKSM)[K)RQCN6}FyVNfXxT;<]3()1L)i(]fFs;)bAM(W1tpqak0>wtU ');
define('LOGGED_IN_SALT',   '^BY0[c:WHQv)_(tkX%CyRW<PI{.ak7xaz8b@Py@C1gaDEKM4[0ZRbtSRtxS(G$+M');
define('NONCE_SALT',       'kTu3jsvAiRuGBCej$eSWHC*K9yJUJiABbq+,$83W+8fZKye<j2+N&]Lrg9Z 7f}>');

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
