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
define('DB_NAME', 'counsel');

/** MySQL database username */
define('DB_USER', 'counsel');

/** MySQL database password */
define('DB_PASSWORD', 'tkdekatpsxj');

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
define('AUTH_KEY',         'C$z1;z$o.*XtCH4|=S<Voc(kYI<aX7qw YO`|XR,Y^3`Y~]jc}0B,hXlBe+1Puy?');
define('SECURE_AUTH_KEY',  '| 5gw<q(|Zv@0kcK$]=m3^NmTw!_<Ev@bZ,+dER2l|D,HjQet|36%P98(9~#pIi]');
define('LOGGED_IN_KEY',    ' 2jn@82e_(zSYiFU0+)_x#AmJ2`]uW;nx0I+_`xhHeEHrV+0Y|5E~xR VB:uYIVP');
define('NONCE_KEY',        'hv*)>Cel02PN.5g==SR<#2&UmW@q//CFdkY)(o|P%|}b|b,fX0h(._KuO+2M6f@T');
define('AUTH_SALT',        '1^oC([O/iux+sE(iQLxFv|$KXx(ICywH@_a>gBx]Bb~ yZ2*a?!axDi N(-6:Z*R');
define('SECURE_AUTH_SALT', 'o/(+2^{g$-GT~ vG}XCxh^R%^?1g0lGWHkq5Nww8MJxTQ{Z>q6`Js,vtao|+kL*j');
define('LOGGED_IN_SALT',   '7RJTOL*+|@3/9H3.vx%6#)eB+em%jZ*Ig5=Y_||4*>uCPGikZ-DFK6,+c-<7Ugt9');
define('NONCE_SALT',       '}1~j+kj]@;{ISD-/-Ed(rh2Elw=#T0Qj+)UIB1F@o-5X*%XEDWAs#}98I`#$Trfx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'ko_KR');

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
