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
define('DB_NAME', 'test_test');

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
define('AUTH_KEY',         'P4dnU&#t7vBR>@/&6`PNDhsE Pq/YO)ynm:FO:^MK`]fDm24}[a5zjEa>Ep;?BP>');
define('SECURE_AUTH_KEY',  '%d}LxGURDRPpQI7AS-vAd6d{QfO`O)=FX@s;{*YWKb~2bKh9eQin@`EL6jL0Cn#O');
define('LOGGED_IN_KEY',    'G-jsVc%c18|xJrk9G:5(ZOU& @c#_H(U=&}7jDV&.y(k9!U+)yLKV_Xy`[OR2;Pe');
define('NONCE_KEY',        'z#uc.B}XM=P;@Kyf=W-(rxJ)&f{vr{e6*`H#zH<3t+pDClb_vDq/zW$TQI)LDybM');
define('AUTH_SALT',        '=.0*(>=mosi^,uBoO[(>K*lsiCI;1L|$-aM@2v4B_kiBNI{J_H`H|r<W10y(`?Jf');
define('SECURE_AUTH_SALT', 'ph5DH)2ghQ~YDKh3(]6LlBjxQCQmyrL )Qi7PxY30!#&OWu9ZZg ?LN{4oz;cT8)');
define('LOGGED_IN_SALT',   '& oGVU[h3a:p>lt#8-: B!2% dQAtzRKhr*^[v{$XFLe~J;^+uZJ0`1 2JWM@F}g');
define('NONCE_SALT',       ':q/AHd*.=0]+t3s iVHR9{wa%J,+/9x:.3zjO+V$`Awgn-=67nTtpJF=S1f5j!||');

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
