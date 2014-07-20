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
define('DB_NAME', 'gitfinger');


/** MySQL database username */
define('DB_USER', 'gitfinger');


/** MySQL database password */
define('DB_PASSWORD', 'gitfinger');


/** MySQL hostname */
define('DB_HOST', 'cust-mysql-123-20');


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
define('AUTH_KEY',         'M4W+$,I9Cp98@Xgc_-lo8V^~jP$ELD%t.F[tC5%=,yUR_L <#z`x!MVP$S29q@9d');

define('SECURE_AUTH_KEY',  'B(VF{hlgnhw.I#;|UzoY<r>XhxyI_Zfn9<(o,%:|48ri2_iS@*-c/+ZwS!(S>1FR');

define('LOGGED_IN_KEY',    'O_imny<fHcAN%)7=9%Q/!YJDZ}ulA3@<R< KNJ%|Y/sz5s.p-v5yX|83+w1Q*]c9');

define('NONCE_KEY',        '>_TIq.)WJuhPK|q&kV+`L]0E@TKm%LLTeB6|W9q|,DrK7s5P _M)Egq}fbBrd6f@');

define('AUTH_SALT',        'hm,G|8]D0w>`JnBcWAbgENM6I7l|B90(9y=D@!<w2k5*qJ?}T(fl-,4+G-+Z41|4');

define('SECURE_AUTH_SALT', 'k@3T.;p{X[#<|%B^%?S@r(wz){t-{/+|}(GYrgL2(w.f!]jT7`+{yav$?+hHp)0j');

define('LOGGED_IN_SALT',   'z_nz&+S9Km+vJc;%Bg<j7!SGn$9/MCQi|1u/_Z;?^3a-uD}i9@|w~MjrEJs15T6V');

define('NONCE_SALT',       '[9|G4<_-*VW1u)qj=eM0uRB=o(~;I/FQILgz!)vpdx-(+xhj)d/$^{~ei<#| do,');


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
