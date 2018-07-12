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
define('DB_NAME', 'wp_mindasoftware');

/** MySQL database username */
define('DB_USER', 'wp_mindasoftware');

/** MySQL database password */
define('DB_PASSWORD', 'J96xIr17DVbwgpXw');

/** MySQL hostname */
define('DB_HOST', '192.168.10.102');

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
define('AUTH_KEY',         '65&t{T#)s.4mAy&Pk@VTqJFRJ^ZY TW,YjOOOpx/`NMWQ:CyP)Hjy8d)u|T6S!,9');
define('SECURE_AUTH_KEY',  'j4(/fiqPj-$2q8M%?b,g$mvhJ9v(H+Ts^0r^W_1Kxjph;yt%7?} B2QNNsDj><qz');
define('LOGGED_IN_KEY',    'DBivpCs*{1qm#dblJH9o=,]8~E)kN!q;@EvDRWQA?r,vYAjxz<t)?x-tfX{KG6^X');
define('NONCE_KEY',        '~!}:g5S$h+]_KU*V2^CYUs0NI}Zdw,FAp/*3$@Ub}+i>U5aWGD4xypyK#C(DW{%H');
define('AUTH_SALT',        '&0%duHxaY6Y$y0bYxR_Qy],UOxO=V)av.80a#F^n!+)5zma-O(UbwNfLRE*.,Hnv');
define('SECURE_AUTH_SALT', '_^MseYw|a%/AJlV&V{:n7S.iGw CGOh/PF8?g1k.STqDdxUe0DIa]Ho$5yz>a{#?');
define('LOGGED_IN_SALT',   'H:V-QkV]AD({p=|KK~B#9{V91ElrNq)RRp-~()SXAyLBGmXQi:J1LR*s,M:oHAHb');
define('NONCE_SALT',       'f3:Mf|1*,/g3:9e^h`BGm@+!8M t!Jh,{Mmav<}[B-Mv}Dk|u{{8sZA%k2riuy`~');

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

