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
define('DB_NAME', 'free');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '&qGX/Q8wQ^)F$W(^b6PC<>4)UJm#%1c@_?N]<vzz$I-?(iu*D{}7$/>//V!/#}^D');
define('SECURE_AUTH_KEY',  ' p($1n6XRvktUD1@R9STn/L;B!] #qy!5Bp)2dvHgWe PRd*?<pscT30aT.XJI|Z');
define('LOGGED_IN_KEY',    'X*xAcgCnBtQNC(ZMebrJb#g@j8B!e:Z5BDbX+43XdBoF/[qGy0bo)KI_7sGJoJ67');
define('NONCE_KEY',        '=IjT-H(mtSVQA@Esy^v@/Se^q&?Xoukp,RqX`5j}.[--}qQko`zgonA-l Q!A}O#');
define('AUTH_SALT',        '~1Z1>dBJMxpNI(2/wSr*nxmY}Gb2h:#g,L, B>#DgiF+a~+&rb,UGy6S=cZQLGs[');
define('SECURE_AUTH_SALT', 'a/][tN)E^>DH7CR,6Rj0qjh_kzF-hG[.a]FO|PILayzVqZ/;sk-i35BwMPNJtV5a');
define('LOGGED_IN_SALT',   '@mz)Y)S3 |ZQ!0P~D0|fi:=<md$s45_I^R-nt]O%uc^sDmo8|Q4g_f=h|(_)TB;f');
define('NONCE_SALT',       'JQ#;aBp(jn^NlY9`@PtIK,29t VqaP-9J;M}Hh.ds<UoU nGeV+yxg*{8NGg;/?=');

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
