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

$dotenv = new Dotenv\Dotenv(__DIR__, '/../.env');
$dotenv->load();

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         '>&a;&tn!8u-!5wgi.Zirh4qy:dpK%bt^y1op3][8r[RVGr|U%29X-7~~Lgf{{c,g');
define('SECURE_AUTH_KEY',  'z>]2kt[~Qm!p-ddGCi*XI2A5LtVcM.WIkZ%[.z>yDYrW>[-j=}.o`%W=BGG^K}]B');
define('LOGGED_IN_KEY',    'B$n0@_Z_PJhmKbNcjqWI<=s{2p*WBt~>9`:7TW7h*=O&(A>D>=cy0YtAD%<u3GZ6');
define('NONCE_KEY',        'LW?## bA1wedn1Vpkf)qW=dUl13>QuSWAJ}-A`Xbd?D4+ehyPJLKDpi=V*$UTK|Y');
define('AUTH_SALT',        '_kk(*f|D;dauN8b}HO]]akdM?Yp;Lm$>V)=|(c$Av!U:]w/dg7)Dt(1/Z:ij4o(j');
define('SECURE_AUTH_SALT', 'Sq|G3DF-}81[CjeO!c^/i^jZWq:{OM[A0(9F^s<k5`@Sxd:fz^[:tSK6wrlkvl-U');
define('LOGGED_IN_SALT',   'HpvLmj$hPI+*.G0o0=m=prtFJoOUS&wbx[<aV#^e@sxvd)+-uYr$C8#(Z}>5e]W6');
define('NONCE_SALT',       ')]WsC|z-r!mhR/,U&^m<pzR.#1=GhU]3>[3:$u=tG^4 Dk;w|8|5wQ6O0d61f$GX');

define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress' );

define( 'WP_CONTENT_DIR', __DIR__ . '/wp-content' );

define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

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
