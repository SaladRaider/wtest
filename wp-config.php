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
define('DB_NAME', 'wtest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'oc_14D^-Qv%}#pl8hGOy>I7;DpJ;>RPlBkNX~JZ.C{-1IC(-2B;OUo:1,NKVSCxi');
define('SECURE_AUTH_KEY',  'pi:uFXV9Bc2<V} ;#O@(me_bh#Dn/(|A%HYk.PjCFI!A?T?UG.2oouEKp_#pe0;[');
define('LOGGED_IN_KEY',    'NrZ^lYAB}*fN|`{U_c~Ird`KL1M(.;6Z!4ULipI:G~j&2]~cw#X)084itR&`/NIz');
define('NONCE_KEY',        ']rg6~d:z]P3ZHS!E(!g`U=P?1W5/ZA9/)8l#c210RB4;X+90cAXrG iLFxvsVBz8');
define('AUTH_SALT',        ';nnZe~)@SKct99CNs~jPI<rpn)I3z`_SI.e:|98sV!m/,tM<[//(.D%C!8SveLJ^');
define('SECURE_AUTH_SALT', '`ji6_.>6_mFhZ^`l_e2bwYbpo<[Fzt+#hjQJ$Hk4SyM9=>!Oy+TtwN-y_aE-RS1&');
define('LOGGED_IN_SALT',   '>2(B6LWqI5V/SsJcC2qtM2[.z5 _;gixY}j#EgRy<A),m.qQh,DyT?F&V18XNIA6');
define('NONCE_SALT',       'LcQB(f!ShHjI?sMXy~qy3xyWuhcM/0;]EI}]+|<7O<D+2Zhb3KCm{KC ,5jvmxYI');

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
