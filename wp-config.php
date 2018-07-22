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
define('DB_NAME', 'antykwariat');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
 define('AUTH_KEY',         '-Au|_jacc%UfR,Ms2NW+qRa+r1~=9,bKx[nh:g4 =bek;-Ec)W-j8auSIQb,$2fq');
 define('SECURE_AUTH_KEY',  'eayTA%<;Hu,-^nss0uA!Hk@<CO+_mvs=,uq?HB#x3RGVVO*o8oj|#-@tr4yw/+4s');
 define('LOGGED_IN_KEY',    'e=<D} 3rOZ-P%X:-edVvTGyA5>>U>9{jZFX,J#_I+%-.6A,Yxj&u0VuFzarY|u?*');
 define('NONCE_KEY',        'ZUb2b(Oh|+f^Om?KF_R%o2Rw#V9:Kc6@!)c?;!H5-c!~kExI?Ed1q5zK4N_<kCQ|');
 define('AUTH_SALT',        'pXN5SIUpvt=*R(S-b}sI9t;,R-66o0J^([l+;N=^,^vz4<}#Q|^E^e)TFo 4xJk9');
 define('SECURE_AUTH_SALT', 'N<mRCVMd.g8?n+)kHE+-fK)JE^Xc$*YA3cA+kL[=p_<>e|m.@xa+-?Dp1_xkYg(7');
 define('LOGGED_IN_SALT',   'eu3qIoY>!];Up_8|Z{>=HRsBrE,pVX:hcLLRu%ZYnIC-z^#_8Z}dnom!q4lz-TZ1');
 define('NONCE_SALT',       'CG&C^w$|1d|lP88X0!i$*N!0|y`G{sJ}9Y1<r)gERDL+h#8PrP;34X/Zd%pY4q&!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bookstore_';

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
