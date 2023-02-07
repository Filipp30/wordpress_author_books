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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_papa' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '@Borisa1730' );

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
define( 'AUTH_KEY',         'c{wnez`c.akYe^%UBxB{i2VzHyzZ^Mv-U37xZmg]4d|.O8K0xIz!ntTzwhX_?>=s' );
define( 'SECURE_AUTH_KEY',  '2E 7%%uo0{MF;F0f[HS`^D)8]OeA Or,4ni9F6m|.X2/)YGL;WI}=vev$DDHg5;u' );
define( 'LOGGED_IN_KEY',    'GQyg;>9 )c=B>Jgosy|n3,D1{^#r  c;Okp_j&m%;E)63IJSd&#jzS2c]M7l#Kd1' );
define( 'NONCE_KEY',        '#0pz>|i9.Y).[9Ear_-hwT),]_D LZ,UGw<u%A%j=_^r`K:?2_x|cOD`+[!cH~WR' );
define( 'AUTH_SALT',        '6P&AO8l:no_d_y!zYOIX&&Na9MQlbcvv)L)FgI _f%A/:N3.o2<o#ZSm J9pY6UB' );
define( 'SECURE_AUTH_SALT', 'W=58Pc);89Z%; h#wPvE?AnF{KkM5vDFIl$>@f)Vt|jKIumCk%etL(.0dZkT|SIf' );
define( 'LOGGED_IN_SALT',   'V/ <@]gxL.I;Pf6~[-~p/pb.joOat$NDR4ZQZn&wz.u6eEp<G<T5hoTG>[~B(qzB' );
define( 'NONCE_SALT',       'VLFS@H.w}QR#?41@Fr<IA/]|)[tZtnYoB*M@,5Maf]G5duql /#iaRXS,LkO4[PE' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define( 'WP_HOME', 'https://grigoruk.be' );
define( 'WP_SITEURL', 'https://grigoruk.be' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';