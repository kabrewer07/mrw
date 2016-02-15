<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mrw_kbwebdevelopment_com');

/** MySQL database username */
define('DB_USER', 'mrwkbwebdevelopm');

/** MySQL database password */
define('DB_PASSWORD', 'quYW5byt');

/** MySQL hostname */
define('DB_HOST', 'mysql.mrw.kbwebdevelopment.com');

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
define('AUTH_KEY',         'jQ!;kp1wu7BPHIWUK9iXbyhYlq4RVND?%HwYhiBd8AclEn7h()venSzxZ_ouY?LB');
define('SECURE_AUTH_KEY',  '`lN+:Qpw#+yhv@U6JNGVMI180NT@&O%cP"V)zCE~eu:dCwEJTwTSJSQ/A;??lm/@');
define('LOGGED_IN_KEY',    'n:;AmMEx2!FA"~IocKdv@BK&8ZwAqWP(RP9D5wQbdh18T0)~MvTV5X!kW1e/T(_D');
define('NONCE_KEY',        'SZos;;CcRo~*5IBuBWkSJYLyX(RH3mE0h1W(lhkLwSQ@lXT:MG4FeSgOeiRt|0bA');
define('AUTH_SALT',        'o^RB9SF!BqI39xe5x?ml2@!Ts?%b?&ZL7~"MpVsZK7zvj&J~RC&W2hjY3v/Ig##&');
define('SECURE_AUTH_SALT', 'M7Rj!FClD"t7KR`s_NCg_&smGx%KV83$eDn!4S?`a^KH(!m#Df1%7ll2b91aNEh/');
define('LOGGED_IN_SALT',   'g``@STu9vV6hlLfzo@SVVOmf@b^R@rRd(N;i(2Q4yF~1A$20Y`kC#qe"W98/I^YU');
define('NONCE_SALT',       'F&)t%cb;0w2bg&Y$x?$DVvrJQO~ijzNg!:;sISi:eRm*5FFz(%S?q^S~;W7|eBqu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_nczbrmyzrx_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

