<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Superdome');

/** MySQL database username */
define('DB_USER', 'superdome');

/** MySQL database password */
define('DB_PASSWORD', 'superdome');

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
define('AUTH_KEY',         '`9O2}K<+/xZ}qYC{q#Dk:)@gIWSn6/ZA~l3w|8nD2kR!-qkp.YAM_(iDpE.wK+):');
define('SECURE_AUTH_KEY',  ')(AB{f#EKOG,C1^#g/d>=gGz-{l1--A 3oB3?11!`i~;Es7]&5|h[(H&,qhl{w(!');
define('LOGGED_IN_KEY',    '(DQnIv|s$<`y _+lqo(:oSawy::xOu0qJ-.@PP2@U<T`v-sZaKG4EZLM|(Ge+R)*');
define('NONCE_KEY',        'kXz-FpZk#Qrw7eT)CFJ9?0zf(1u<}|LP+F&{kWyFe+(!O2<FTHt1-y0|</`?^#B|');
define('AUTH_SALT',        '=Xru_ek1*eh,o~&4B[XS?Qe`wD1g0^!$XyKO8ft$;*3(|,l{0VNG:X-39-w7?i@[');
define('SECURE_AUTH_SALT', ')QyEokx#EqDF6Y-=,2(p0! ]yj+AN|BC*qhDqbY]7V51d5?=-y|2 2Sx<$*!r1N1');
define('LOGGED_IN_SALT',   '8 Rup6$V]?^8.XkUh0 O`FEN;]4rSJ(o3F IhT2SL7lS4ur>(<f6:z[ClhH_r/:B');
define('NONCE_SALT',       'dOm1Fz-A$+rskbJ^F4d:3l9]z(m1 Zv-9_8@imfq9vKe~ZQ7;z0dJ(A>/Z~P/Tvz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
