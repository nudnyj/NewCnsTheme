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
define('DB_NAME', 'sandbox');

/** MySQL database username */
define('DB_USER', 'sandbox');

/** MySQL database password */
define('DB_PASSWORD', 'VSMra6AMZYaXvsBU');

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
define('AUTH_KEY',         'J6YJoP=z-{Xnfi&W.2#nsQB|_>l~oH-)Hl)A-M%Pk|AMk+zlO;r3dFu%#e#/ae.,');
define('SECURE_AUTH_KEY',  'r1NQ=>BNl%Ep% W-oP.wI~;K8Iy<3zd3p}3,1=VU`VK]zs2%6XPuBRc@?Q@r>WJJ');
define('LOGGED_IN_KEY',    '//tLxGb~o8@Ew:4=@j5DUPw5+`kM{Dg|oO/,XmcAx]bf[*0&7wBT4naBE2/L`&iQ');
define('NONCE_KEY',        'Fn}-4w&_X@J?KePt<eYA-k!Zp#|4JWG,(6w+flp,6g%E*.XO;r>X1DYq&gXUJQf}');
define('AUTH_SALT',        '|OiYOIOJafYk0+AR+HK(I@<cM~%;e@4iL3b][-VIL&a2IJ+_2+nP$?0u^oJT5}Wu');
define('SECURE_AUTH_SALT', '72Q(Sja=4OPA6uxbsH7a`piH.8%z:!H1r;_ZF(DV!Wg_5U-Pum<mh..xf5H4DW%o');
define('LOGGED_IN_SALT',   '7TGxpyosF@)rpGb,?ua{%}f]Z%<LJJxd|,q?]4p-M&)5K1-&/5ms@|b3|B|kOUos');
define('NONCE_SALT',       '2du$@=HBo8a&{8J<:f-l1n-ZaXsrsU? ACshB#,ZI3-F&edgWu4Cq>^8+KJ0&>K-');

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
