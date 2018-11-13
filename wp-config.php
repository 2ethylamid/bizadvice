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
define('DB_NAME', 'bizadvice');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'meddle123');

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
define('AUTH_KEY',         'U&?b=xQitDZM.a)?M(kR@?yxpgf~gYMLN1pIpd:bdYvu,3jkWWLw|8*&ybR>J(#Y');
define('SECURE_AUTH_KEY',  '_qG+120SQDt//dWK*.3l38( Ag[j=E<t(oeKux-XbCN+XM-wJ.3uJ&;d?=*[V@/9');
define('LOGGED_IN_KEY',    'IB7QyThm[gR|cp7^+L)}$)q c(g..@v.%e$+8K=ez&PixMYt?hqh#*ktS>k)^dww');
define('NONCE_KEY',        'aSYNHiy,MVVT+xHrJhQ!#(vk-d-Z|R%J+T:64rb}Edq6#nT&%tEbP2<6x>P:}4by');
define('AUTH_SALT',        '~pQtiXS;6~/^vy*XG2a>hc7%E/TLw3dYX*WZ)uo<JrMbt; Ef]W,?7^y:y5Uu,Ez');
define('SECURE_AUTH_SALT', '5VSwIgE=LFeASynl=9Qty6W>AKLbP$]]W8qe|9:B &2_r`ZMUAm&J `w1-R)k`w=');
define('LOGGED_IN_SALT',   '2GDRfuX-k|o$x8b[|5]_A~<r<A&0|L!PY8UawF,CmCE%w#Z0C;r^:&#ZYX4@h=EX');
define('NONCE_SALT',       'P2k*3tw+K3[(^|=|d!z]5pg/H:HWf%;zJQ&fHrX>h9tai-_Lw%onHniZ0;7 zF.;');

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
