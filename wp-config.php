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
define('DB_NAME', 'wordpressblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'compass');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

// devi
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
define('AUTH_KEY',         'ug(.IW]&D &1OqHrwBxQ=ATC0zwMbUEBwS%-oosaJ+t8Gor^#YN5MeeNlQ0;K|Pt');
define('SECURE_AUTH_KEY',  'Wx?35&Ll.U9 -<jF4hp,uZKft.i6`p2xuTJ5%#&VQ;Vc^-lVwf:_v)9<H&]vF~Z2');
define('LOGGED_IN_KEY',    'Ky~C%Qg>xV{W|O:y)LF-TC!v30jDS1^vEyXuU^v]hPEeeAl*vO*k2~WZ6MG[9VR.');
define('NONCE_KEY',        '|oFn^0.!EY=;*;,6y}#K.SH#CGNfOJhHouT6emTEv+Z]qX/BU$?X [3RuD{zz`>6');
define('AUTH_SALT',        'N@u5tku{zsd/nt3X_`VS9FFpG3rG|:AD5:}cJ}b,0Vypc{(R3M4d-FKEQGEid xV');
define('SECURE_AUTH_SALT', 'jNnMUcZ1IMU,_2F!X9A=a#={5{svwRAxf:&rVnrhFS8%,>n*/j=c@sG{^cun9L+P');
define('LOGGED_IN_SALT',   'M&.]TIXjRGNL4QtPkn2$Qb%4Brjk K3/wj^A?ZX^1x/iKfi;:bsIr43uBsv=Nc><');
define('NONCE_SALT',       'Ir0Tqz${ZCkb1{}a.(Kq!F.D>.3IWzF@!hrHjPH,s,~xK^xe7e[e/9$Lj8`yp43M');

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