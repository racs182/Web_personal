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
define('DB_NAME', 'db_web_personal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '9tU|Y47a(fx2V--:QC:.1-FX<w~R.5S,O^R)uGT,tm;},O~G.UWA4P0&&|6F*A#5');
define('SECURE_AUTH_KEY',  '42LK@}ee`B9qU@<;g}Jx8BYHTAY+.On8bJb#(VARUZ]}>|}jY=PqobilSO0ubO7J');
define('LOGGED_IN_KEY',    ',eA$]Zq6*|^c0X^i nX|z_dyQ!zGi(,hDbEDxW8k+hDL%-H~NGmZ)v%P6o_x,S=#');
define('NONCE_KEY',        'N9S#.z8}DTH$~*6&wr/Wd#a.6p6wLK@}46j>|m*zOy|} (!0]2<fD65C-+r6D/Zo');
define('AUTH_SALT',        '8Bla4=8}=}PP(#8TQJ5%|#=d@@3IkN(,_)D5o5)R|qxQA%$/$~(Uk*nEXqel<Y={');
define('SECURE_AUTH_SALT', 'p:Lw#[f3(dK>K^D,Pb#axEzgQW-S/&>uh8(Zdi`+=MZ%QRvNn}=uSc?fKu{F+LiO');
define('LOGGED_IN_SALT',   '(+98N>LWAV=Mf1G~=##<o+V>GBkh];c21lw&-`2<c|Nu@u~xsM=mG$ZX*_<dDu|=');
define('NONCE_SALT',       '-z1kf#)@1`At9Y|f+God7F_T^Y7yTXExU$7X9*#_M4tgj{:lZiW}|{XR/6:X6&CU');

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
