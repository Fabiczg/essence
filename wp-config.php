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
define('FS_METHOD', 'direct');
/** The name of the database for WordPress */
define('DB_NAME', 'essence');

/** MySQL database username */
define('DB_USER', 'fabiczg');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '1 %XDNWB;;[vXrSx7hYAsv^bMzKKtxQv#[9y]sb8%e&WmfGvcFR7=*<uZsB&yg4g');
define('SECURE_AUTH_KEY',  'Fhu=^oMWApRhM6+ /6wMsZz79P#H3AJ[)nPOcK2%a1FQQH)2.l*gk6Sa%>{J=aXn');
define('LOGGED_IN_KEY',    ']/SS7OSU/mZIMG)?{[z[Q[<P 0T03:~:{D#2vb7[)u=3-5R([[Gq1I)/PeWxp]N8');
define('NONCE_KEY',        'D08$*J2lR OSZB!#N?|E`+r,6Ljs0^$2FHQX2Q:*?1z*L.K)[w7{d#Z&BrrYdC`1');
define('AUTH_SALT',        's*%MYapKY7c@Q|<p-i epcXCn,%,kr)8BKT;^U4/44(0X&*)slZX6M/5zX:8<p7>');
define('SECURE_AUTH_SALT', 'Nb(oXYZj~GB&N=||k2.=SWp[hsoyK_!ecSkvc,dXgOv0fhM*^(b5r,@A`QVL{<R,');
define('LOGGED_IN_SALT',   '#A|xdl+XV`;??JzqM3|R{/Umq^~c>*A;FS(?UNx;R4]V4==neA;>D5{nVaODF}L^');
define('NONCE_SALT',       'v@n*ZJN(:HXB8b<`$=xU0 e!IB#3Q8XP}i:;j<)Cm,zn{z32~{##hPfN_#d-ig!F');

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
define( 'UPLOADS', 'wp-content/uploads');
require_once(ABSPATH . 'wp-settings.php');

