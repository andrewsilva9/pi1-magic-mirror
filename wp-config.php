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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rootberry');

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
define('AUTH_KEY',         '3BON>+lfp/ J>~cX=~mk;@MlPw_PX-:^h-imxk`Xoyr[qjO@-Tx/n/aimzk~A]Yw');
define('SECURE_AUTH_KEY',  'c?W=GhmdQN@~2N31m8z2zm7yCp{I$BkGtKDGBJ[W91Xpx=f)HQ?%bY?*xd>EKf@T');
define('LOGGED_IN_KEY',    'H.-S%fw)-uDAVyDDt(<]YKcBOax;$H#)d.]NdxcKE5gXjgrN/pey? FwD+DI/o.O');
define('NONCE_KEY',        'R*JG!KW[M=xZ)H1Y<nRImx~T#-M+)ot$-Bo=BJ T.6IiX{&sYB%S^LcB-McBAQ{+');
define('AUTH_SALT',        'Ldc5rB*jr1xW8!{vN,Y<g3) C.8>^6v9Z#d]@7g4Xhm2ayc_iy#wU-m2RQP[9.{J');
define('SECURE_AUTH_SALT', 'MBj_EodbAZ$BFp`Csb2@_p]99f[|yP x|B2x{l#QBQ(,LK(Lyf43uy(GgGk[z9H^');
define('LOGGED_IN_SALT',   'y,XM*CS))KBR)2RD;/N8K4>qsNwU0!dWMJ/=:51z]gNOQG,`U-nCv*aq=2g$xeh,');
define('NONCE_SALT',       'Yswn4SjRwAz6;MWDc4[.F|(d8/0=~4]gFZ+g]0]i+ZxCRC8OcdK)*v3y6RUV#]vo');

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
