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
define('DB_NAME', 'lifecoac_blogs');

/** MySQL database username */
define('DB_USER', 'lifecoac_blogs');

/** MySQL database password */
define('DB_PASSWORD', 'blogs@123');

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
define('AUTH_KEY',         'Q%Ocq zKUL]>I.^Lw/;a2Q`ouB3p{o G=<>yP#.Ym ;i3gDL{^h7va3srCF79[H]');
define('SECURE_AUTH_KEY',  '8<[Yp<LT4CsDKEeTYVdO1# 5%2iyK7Nl@a)zjY8;Gkm_}sGyv^8!,q#kf_xHy*+a');
define('LOGGED_IN_KEY',    'XA +rliq3cjFCBq~gn%6a1)IIR0{t0Z}$h4G,ThV^A?f{S8nbFcfv9*T9a|ucGOG');
define('NONCE_KEY',        '>Mi}m?]5VQUjLE9beSBHu{y<-[OyqPBWafnoWpT~QKG[?#$M266ED?r,lVR.e58%');
define('AUTH_SALT',        'Bo@_bs,%->HD>rd&NNN~jyp:d{o-VUkBvRQF y}!E5C/>5I0C[XV-u*=sc#|eMAx');
define('SECURE_AUTH_SALT', '[OiZ[_W|}*Zh!v9YfyNu WV91HV.2|3GP.U_isG3=](8U1<?]2ObULqhSI5w~:c)');
define('LOGGED_IN_SALT',   'G=V&:0Gz~LkqUC44P{{:P{6=mY,{KiIXrWQ*A<Rdl-]EgdLGPv?@JBt$`v?qyM/w');
define('NONCE_SALT',       'QFpUN!q?TxAIN8ROGwpS!w+iRSS07KQyrA[0pu1|,2Uqf)KmYjeY;1OzQLJVc2}]');

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
define('WP_DEBUG', flase);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
