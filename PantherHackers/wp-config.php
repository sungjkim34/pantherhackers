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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpresspass');

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
define('AUTH_KEY',         '}hA?vm#fvW~k|>]l0$R/>+c8AT4$zF6_rw2wpW^V:]/i[*s|9OyZ*g(ajiEOa|B~');
define('SECURE_AUTH_KEY',  'D%U-,a* <i[u}2{s-TWp~M%&dxfwQpcpW>-|MK;&n=XusF>+Sao1&a@ot09TXuNt');
define('LOGGED_IN_KEY',    'SSl-ThB/T`M!bJB$K^RNYFL+MLp|0KMNZ_O5x6.+S#x%Ob$IT4fv67FK~+!-mX}6');
define('NONCE_KEY',        'I-5^>flE!rDBv|+_E*PII3f,}rzh}]b;[)$]r8Wp&17|.{]<HBe!zb5aN1W GiaH');
define('AUTH_SALT',        '!EwD&lVr7<{k-vG|q+i0/k:KPM=( ]Z<t+mc?{`o-w4vzON1%/VR&]+y}Sv;.r[)');
define('SECURE_AUTH_SALT', 'pk92I>1L@).+xL?HV%!|J4(3i`NqD{<`c%1L3|{O+3p/nuK:^czt%Fap$H,N{:(7');
define('LOGGED_IN_SALT',   '[7qb y_*$oJ<mF6S[# 8UZ!*ZnSSRoCwz!2MV&|)wZ#9p^ %5:e9cOxhaN)43+/Z');
define('NONCE_SALT',       'I@:440r{~q&-Q=H9+[IXy_9;oB0dC8[,bj_8Aka1-$;eZfsA.ea#xCyTTpv&^88;');

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

