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
define('DB_NAME', 'astarte');

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
define('AUTH_KEY',         'UX%v-`$12qN-v}1MIrMouBQIU+mGwZ/2#e-r^| 5w~A&rVikT[0{9x+D6pGN#IA9');
define('SECURE_AUTH_KEY',  'v`u;k4pADc+HV8I%[:qBmNs(l&u||2-G`&q8)E`|_-k>oPjDMCRQ+Lo:_OVp8*H|');
define('LOGGED_IN_KEY',    '+c:s=8jH~KHU{*>P$Bp&|k*)tX;7:mLtv~P,?hK)Y])_T 4C~Mpj}6s1u*.Cn;U`');
define('NONCE_KEY',        '|t(0|0:[xB?liMi-/Dy r+R$(vFu{BFHu.S.I%{fdtbPfP-T. +Dk=[-tkW;O^[2');
define('AUTH_SALT',        'pXH7-Wa}JM/5#VNh}>(+?1$|azO{p-c_G}QNSvlOGc/j5(OXl`Emzi:YPWL*A&`F');
define('SECURE_AUTH_SALT', '-i&HZl|#d#;m-oCsAU;v0G_<|NeNck3i(L|OI4-zE#!C;-_`}GIrUT3+XCXYi#E4');
define('LOGGED_IN_SALT',   '1Jbf@14(0/H)S;qf},3g(,sNL)=fm=GY(j{Mn]`^hy<Kb~?G{u|6t $RYl((J/*V');
define('NONCE_SALT',       'r+_rQZq b+lQ0qk7._[A-#l#*0of7#E9 o2jW]b3)0eU)i?-:c>{zO}i3IL3Iz#r');
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
