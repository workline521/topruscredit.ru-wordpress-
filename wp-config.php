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
define('DB_NAME', 'Topcredit');

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
define('AUTH_KEY',         'eJV|P;Kr=0e_rU.B yZ51()06(x2`eExth`-Cm6i`l|[GVnHXIY[m,WE5Wmg$~5)');
define('SECURE_AUTH_KEY',  ':7p6g~QPg-P9+On+aq}*8+4jZs>j;{3R?LZACzy;Hw:KXr;yKb&B=k5Db`X$6#z!');
define('LOGGED_IN_KEY',    'pDr/g*dD7_AH/ /~>52WsW]7bO?FaX*Jt64qF)e`,mQ;Q7.^*PC59b+BB2_EObwP');
define('NONCE_KEY',        'OS,qM]5{uq>rEQ^8h36Z>)]*;{Angt8J{NC#TcNy)i2[ZwsB!}{)n@vO%p+PAy6+');
define('AUTH_SALT',        '%?buZu&uZv<2Zz*NvgMj>[1+x)$>yMSb[cr7G2ZcB:W*Rq@MVcAuk|>2`!sV`a2J');
define('SECURE_AUTH_SALT', '=o?mrAMkrPHSA~/Utt</LKuhbn,wJ}R0 ~j?aWQ(a1z>hO[JX/umh&^u^N%B@M]>');
define('LOGGED_IN_SALT',   ') eoB& _*pE!Dg(u*cotq-=c~eeM!m2Kgb_K!T)6GF/nm$jR-QfQ+HjN:2*YC.N ');
define('NONCE_SALT',       'C!w@G;c.ghexosczx(U?|$w33M:2y.!ma10DeS`BZ>}cg>=vj&Z1@ZD*9uv<T=Dd');

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
