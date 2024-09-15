<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'emsdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost/emsdb' );

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
define( 'AUTH_KEY',         'lz~x$Sly^.|jyw^rsk6a/-R,Nt!r55n0/M5y%9Q.tiwi~8gQ+s21mJnq0fq-x;22' );
define( 'SECURE_AUTH_KEY',  'YJ6j%Q)#6`e.UnMHiT2n&3gU-<Sby&d[JgrmuasV{Ro.8vE<U0$x^+yz=K8oOy_Y' );
define( 'LOGGED_IN_KEY',    'XL-[4cH[zo0x5XgZ+mxj(vr[9NP96> -m&pdNL4$L5iYt@:aV*>AiaxmT=:231>P' );
define( 'NONCE_KEY',        'W1jW+Xgc8ZkHTe6qE7LeU&<>DSyx.UXa(Q{z1P^+>lV:$Hu4?5,d40MCTRz8%5`.' );
define( 'AUTH_SALT',        'Lgc<et:xf jOHViu.<PtuVl*F<7PTPdYOO$[2#p7ie[U3E~X9CBDM^`]k?r_c%yF' );
define( 'SECURE_AUTH_SALT', '6g#YU~S>:.+=jXCP]D8~%]%9IdYY@K*7 N:V92V(BD`B1 IuH9eYa#}9chXWk_/R' );
define( 'LOGGED_IN_SALT',   '6E1~e]OT37z3#f4lVlR5KC_-k+5xGYDYbt15f.Zk]RPbWgh6%ra?.Uh!urVBOj5`' );
define( 'NONCE_SALT',       'Aqp%!8gYs. #w`tEk =z~pR/#BvMj%@!)s;]*6b$Z_mBB2mcvKrD!^4!aF73KS=/' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
