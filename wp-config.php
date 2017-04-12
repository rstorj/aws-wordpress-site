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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'rstorj');

/** MySQL database password */
define('DB_PASSWORD', 'ZGf-Ad7-Ywz-LqJ');

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
define('AUTH_KEY',         'JRb1+!|jSj]Mg=C}H6?zS[)++ ?Fd<.5lMlW@hp,buNCc1 8!7g$+oFdQ qyWbFZ');
define('SECURE_AUTH_KEY',  'TZB-&RWWSMdL1G*<YPkcDKJ=.~+6sn;Zy G0_AT;| _=x^nDWV3aQb?YxKdN)F,{');
define('LOGGED_IN_KEY',    '!+=JA}Q<oCobr=!KHN!;*v[KE2xeM-|0IE,cl?Yf3K+{GL]D4{W^h6=l0#~jM1Q@');
define('NONCE_KEY',        'J,5>)Yp!>L~3umC~gX#grQi{I-Ku?Wr*C]G&Tq{(d6;GFS)bu~urtr?/n[`Fx=JP');
define('AUTH_SALT',        'P`)=GAAHMR:rZc2]QrCdKHL/CCh4)irsCO{1hj|}Gg>_<)-VM*S_^MXQqa5O0GB>');
define('SECURE_AUTH_SALT', '`eC!F%y_sg4R+jA|L>=-XqWJl]{Oj;4IIr);&`6N3||=DjB.u.98Q-WEZ/x-u0)s');
define('LOGGED_IN_SALT',   ';lzp-,A|=3K%|U %e|`inIf8/%ZlmO ~<0SB9B/kh(OJKL(2f<H$~P_LFl=Scm0!');
define('NONCE_SALT',       '<$0-**UV{m;%aUl?hxla:iyaBGTm-]wM74fdOVMju;3746C1lWPw|++iLSH~C_j!');

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
