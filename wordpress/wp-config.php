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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '5=sLWo|E#s-/mfGybbL8lJPsp#+U]3`/h<D}7Q}F_/6rhvKzLt6L+Tp9kW9A]aee' );
define( 'SECURE_AUTH_KEY',  '}9T%SqoA&+kEgMq<.GFyMsw(7k&Ge$O6Tj*T[V6u,Jk9l:Kz!kU>U=rWc5NV9(cn' );
define( 'LOGGED_IN_KEY',    '2r))m. ,b5cz^,`hc^on]g`4]t]x>r}HZRae{4Zg^|wD_g<VqVM[*,eD]XwPz>%c' );
define( 'NONCE_KEY',        'hA8UsndiD2/6_;[eT;b3^o1FBJf/NHc@@|mLQS00gyt3~L6m9l; /VJq]&Qm(92+' );
define( 'AUTH_SALT',        'sCUM0myY#*>FnY@]xso_(3mN>1I`2`I)*!C)VEi-Rh[:WbSYj2i<s8238Ak:Hf5s' );
define( 'SECURE_AUTH_SALT', '^3}|1JW-d34?]UYKy~.LH^ 0q3j5*NJ,_4B:w.{n@wFp,bW#k,|KrO| [X~WK7{$' );
define( 'LOGGED_IN_SALT',   'f5B6aI%JQ^@Z>vdv@|{Glay3PPt1Ny;%A_qv:Fxj/Mn{Ghq5W<[?UQI8fG?g^]aP' );
define( 'NONCE_SALT',       'k/<].a]$(Pfw:K&mY]BgC-#ES yg3r4;d2M$)=Ug3Rl#2AWddQ4?T0h<u./6aw_f' );

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
