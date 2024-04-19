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
define( 'DB_NAME', 'oc-projet-13' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Ur[O6KTZQ(KAvt5J9SDcXQI~YC3/U[;6w&@o6Uq;SuPVK`Vv4b-IN#CD(vw`-3m-' );
define( 'SECURE_AUTH_KEY',  'Xh3c6cdGJXXNwyXu7A w.Vf/-XG0hRmETtZK;>:,S4;@Hx{;rx~*P,N.LKFMrsav' );
define( 'LOGGED_IN_KEY',    'pf7yUPKAT>.ny^,Vx 7%X0l{8=T(/}r2[YCy3*Z_nXk:=bDL,}wX=@2^Di(W}hGU' );
define( 'NONCE_KEY',        'hM}D-^RBO[RUMomE~$MX55OzQ3ugl=9H^o99_au_fTzcDiRDNZF~v|>7 dIH>`lA' );
define( 'AUTH_SALT',        '=C4PD#!GVW_q!n|p+I7oz#LpO^fd?~;z2[!MQ|L)r{_7;T%6~1RAaMxX5D&W39YM' );
define( 'SECURE_AUTH_SALT', 'xo6)6GV}R0CZZ!64FQ&;1,2t8^[s6bLd{E+Tuv|*UpPqNjs^k~;?xIf^V$UH;_^b' );
define( 'LOGGED_IN_SALT',   'mjCpR8h^yJz K_QOO;Zp}#2p/zY_QrcmO*|Yk.qKKK?NM,.+(xk;3H~8SvB 4Dq)' );
define( 'NONCE_SALT',       '0?ro_P(qH=_W9d?7N<v6m[r h}fkdOOvfBmEuUjs;N.W%X0:5^H?rFeXULgM5J;-' );

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
