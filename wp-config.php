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
define('DB_NAME', 'shop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
set_time_limit(600);

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
define('AUTH_KEY',         'rnsv71lyQSSDPB>(RzIwPL!Y)#ej0L.P:zefhnyqwv jr XpBQApd{}h<!y=%pmw');
define('SECURE_AUTH_KEY',  ']Mr[_6ssr7`vDna.F?381=;7=,@OlpHE$>.pY_p=}MLNga(j4zU^IQja%hNA2G=L');
define('LOGGED_IN_KEY',    '#ME/<i56]=9KV7}.T{T~{ILr^wcwo&l-v;KMfiZ#;4f{Oj*~!:5Ho~y3_IK1MEHW');
define('NONCE_KEY',        '^2Dy7Nfx@M!V%]l<gtqtdE[57lfm}2,BN9&(YVf51ca9Cmd2*rP?b$VdsG|I eE ');
define('AUTH_SALT',        'n:}5I8z%D*-->C.qvvx2h- ty}f(?[j:/57?1*l]_:+fc`(+_fL{wVDl|;L4E-@L');
define('SECURE_AUTH_SALT', 'x1$L<ta5al1t>F9C^HV>EIfHp@yvt+{NfdXMhtDSEojU</F[(Nksz*oJf;u3&g~M');
define('LOGGED_IN_SALT',   'N*nA91^*P9Lv_N2K#&jg!4uW=8L7E#T2NiuSy4&mB55wZHS?xeU&d/_jyIL=pPD=');
define('NONCE_SALT',       'U^xO;YO6d9z%b[4^zOYas2o/n3#(P&f<LPZHrk+!:9_s>+!vro}`<M;<%TH`N&bV');

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
