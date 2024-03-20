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
define( 'DB_NAME', 'zt_blogsoccer' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY',         '=s_t;BN]v:=@(~wQ4Pao1Ba%OgeKqUb!Ov(W3N^|Uf6iB0@+|rDL@[pjd4J]Roai');
define('SECURE_AUTH_KEY',  '0%J>XDS8p`cx2! %,]VMMr,JaX!u$B&| s)8-/Ods+PHyT{n:JaVJ^|9V;:A|Nk,');
define('LOGGED_IN_KEY',    'CWgYO,tnM|K>)FRRvP.kj460+ivx-@b/UXU0dY9zmxdGA5T<wreToeT-+33%4%I#');
define('NONCE_KEY',        '!?o=l}kKV$!mmG^YdxLLGde!okWVjzX DN1NK&1OhPb5z!GY_so1.D[MPouz_HqF');
define('AUTH_SALT',        'J|@r<qqmtWBB];P>m=+CA6H`i7UBxMq*n{T>nZR5PqJC7G)qiZ|MC1SUg-Aiy:iV');
define('SECURE_AUTH_SALT', '%>-#vcJ<=|?>#)2Cg^y|q!euTGx;(TrR2+HGFYG}5P)9Z;f-Kfw#%zI3d~U3^c))');
define('LOGGED_IN_SALT',   '.(NC2-AMp>EV`rsC)cy,%Q=c3G_&eDdOM3fwjU8>}%U+!qx1>xOQ%JP|7|eJ2(.X');
define('NONCE_SALT',       'NV5I3.ZRv}r::LY+|?LF{_LCH#;[^m&>p*-uv#}y8rrU(n~}?gj0/g-s|MOs]pe<');

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
