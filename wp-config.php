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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', '1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'srlKT=/B<b9F#qROt9XQt?S<B-g|{Vo07ixQ?V$rwXBaF`#8~95+)?5D6b9F#m%g');
define('SECURE_AUTH_KEY',  'qHc?5}H>vG;=I1|W`O2.E)8YBZ-iZt}9sa:Mh8ITUL;s-{1/^EtWZLoGpE-rxsfU');
define('LOGGED_IN_KEY',    '&,s%]Iz0m7uneUOY=x8SuwAbw%dp=|(E-h${-%0m3(|1}mP|c+-A+czuWmwf2%!-');
define('NONCE_KEY',        '=vz+?!H-jcj }|}_#v#uF|hD#rtM=2*m/Y[!8QzpO9Hq+]&5eD8+2hJNpq402-?9');
define('AUTH_SALT',        'ZkTw|w5m-7]-*O-^pI_=:3zwQr(.BN:njDDoJlz9wGKZbe0FR,[pi5zl+IfW~7Ug');
define('SECURE_AUTH_SALT', '4x7lj2 r[XIVSF(;Nhe 3&$pp&v7G`}UmcaKkScQprK5/ G{a;*i[WbN{zD_@/c~');
define('LOGGED_IN_SALT',   'lu%@-w{<y9-`~7ISi):A}sO)}}C+2mGqc;e*:N1#@ay=NnB<i<|9I9utfr_WBX4`');
define('NONCE_SALT',       '0IQH-xm5tRjI-3g6z~F2==hcvs$vyEzQyeOD9&d-g#3O}X2)F!JHQS`n1p%l>&>a');

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
