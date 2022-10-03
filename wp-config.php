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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '~,Qu(j`Yfhau^U$d M!-,+No$#hht(I&6A+JfdC[ngQ=?9J65;|_werW:/a+Zp%4' );
define( 'SECURE_AUTH_KEY',  'dwg#-F>qf8H(XYs=/0O~]LIg77Dwh9gQBU ~[,l*KZd8m8pQPW}R*iYe5z &5O]-' );
define( 'LOGGED_IN_KEY',    ':P~|t/P&yVgX;:;a?`eeFB6V->2vxAL{u=[-8gD[u!|?p`Wb>vfPg%|kd;TXlQ@c' );
define( 'NONCE_KEY',        'N/hoVNGBrys1$gy5lx92TX/iR]?>>`zu?z,r(yXC+H{]l:`( *!klwyow6wC@q1%' );
define( 'AUTH_SALT',        'Er/n2IrN<s+_+5 =B(bD.#c%C!E3sJMli]JvS5>^Q8(bPM8M7<$eAY/ZdMh$18k)' );
define( 'SECURE_AUTH_SALT', 'x_yXR_$byEN6cf#r[*(1) e:ma{A)x!Jx?>2q@9zG9}KkS,}ZIbqQM)55,!vjSTW' );
define( 'LOGGED_IN_SALT',   '<0[jtre)bx-97GVrDL V.f[?$::YEC8^;P [WQo1>sE@DeeTL_pEaNs5VN*g=(L1' );
define( 'NONCE_SALT',       '0mf<1{B!{N?ud)D86#2f{}C0&~y(MW|)d0{o u7ekOwg%zzXvw+blQ2$brB|FZ;4' );

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

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
