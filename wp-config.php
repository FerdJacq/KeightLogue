<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'b?_b$t#Pf ~g^$6?dp[GHdQp:zKFxFFG%4$2^@1q8=JJi(|G&!l(MvnKkL*TZFU;');
define('SECURE_AUTH_KEY', 'cym[Jh]$I9/OqEZ4}s=_A6h~qkV6Ga*2{~y!&hc tkvBo-xWX)4N[A7 $_?qH.W)');
define('LOGGED_IN_KEY', '1~#_A$q#KVV@d&bB[)+>Ue#.2I*xbj7:jY/-ar2=WZXe~FrIC,xa44f0S*u.>bCy');
define('NONCE_KEY', 'inwfy sYFN+MvDVhZ|dlcTT)1GlL[]-Hu3G+P_:h%(0|[~eF@(T#[PMQBI6E,{[N');
define('AUTH_SALT', '/*COZd?TJKeG3O!ec96 {]&peLoGPK?j<*5wh#afV6[<pjV*EdPWhpU=|;|B!CD=');
define('SECURE_AUTH_SALT', ',v]Nx,wBMMG,Q?avQhgPOhiQcsr`=QN<O[=tX(9+]3V@AyYl^N1KE!]jw:0XGHJ!');
define('LOGGED_IN_SALT', '@x:^LYR~-r^}T,0`x/7MOb{fW{/UEPT=}i3-Ooi;MAj)4:nGC>[_)JCFx<GJj,w>');
define('NONCE_SALT', ' :~3kiBQ(XQcxh9ym&+kM{w3tLP=EAKwPghF!e,kvPGD6Mf7$}C7z70:8m#nw8_g');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';