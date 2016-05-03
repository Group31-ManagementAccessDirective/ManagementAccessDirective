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
define('DB_NAME', 'Project4900Wordpress');

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
define('AUTH_KEY',         'E!Gz9*+5;UuE/xG2jbp#?(h=yW}hHkXp?;RxPB6}HBTS-hk~%Y!E6m7QQkwq=lZ$');
define('SECURE_AUTH_KEY',  'Dd9)U.z1A{/1q99ijG!u.L/bOm?E[HmloRGf=VX!Y&kbvy&&;7rcV-gj/uuK]}@Y');
define('LOGGED_IN_KEY',    'Uc0hEX>imR.1{)KK+<<Ve}rCWHrMPgLT&S3BbE@-2s,UIajamx`5sM&Y(B= RWlb');
define('NONCE_KEY',        'X+3~=`?AJx0W]@Is!lrq2/iVwfmK~r0MlPdITzgd,:R?D|D#cm_l)webGeW|7<d4');
define('AUTH_SALT',        'B87:X2y_3[Ft`hIKNv<*N~El# 4B}ipo*s42x-ty*]{GsTf?o|IO1gruro|y271J');
define('SECURE_AUTH_SALT', 'l#dgHqg1BYpmg<9uDEF4@]:q)0KH)Ue5^W%x@7V{IZ)UY+mYjG(~8/2klkL ~W;D');
define('LOGGED_IN_SALT',   'r-6=OUO}3|?ZN96KvpMp($;ZjPHD)0)|A]_olst9t,x$O0}bg`ArtA9flwO.{Mq-');
define('NONCE_SALT',       ' !vaTyeldxUF^N+kgK/!jLkECi?!& l4z<+RAAhf[&-YTRX0J}[BcgR^C+SUfs~ ');

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
