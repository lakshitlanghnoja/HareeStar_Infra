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
define('DB_NAME', 'hareestarinfra');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Fk0c;JMM^DrE+t[P;RU_.q!JEo71!ri:9a|s NYmnO983j-C4#].:Ag_2$%w{&!^');
define('SECURE_AUTH_KEY',  'T Fbq%[~$.Ae/q7q@<](jE)C@dRH`/ymm%KrK2.O^$`1w.2wq+*IIr{PwU(asFtH');
define('LOGGED_IN_KEY',    '#EqPWnpqRlldGwkz(vDvr+(Ij*),c<,jfu*eaBF<O4hkHM *:{4A/G`AI?)6myP0');
define('NONCE_KEY',        'O`yjSBq8#_,xe>BcQ;?kc&joVc7Z6Qkkjb]?9XmA;lB>`@j&HV&ug)+RGLxN##8%');
define('AUTH_SALT',        'Cz],?Iz3<$ti*w;vFx_13{u;C{`;&*1z@:OfRA#A{vZx8Chic!]lw@k0$:`jY[?&');
define('SECURE_AUTH_SALT', '|=oH`rg`s*}t8_^ao3/s@LZ!%;We(g&^VXBT gRl8TNIX~$$mVD^C4:n@hCo$A0S');
define('LOGGED_IN_SALT',   ')bF/A3g.M![*=4iSa7Y]fvG0 he/]g>j(4$7,0.9|oh<K?gu/V>OMi55XOXC#-n7');
define('NONCE_SALT',       'es$|`$MgL4LREkMnH(=kNPF,jHZ?ZNlo_#ZX@{ yOq@T}x wC&ZS7<;un+~-tuwT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hi_';

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
