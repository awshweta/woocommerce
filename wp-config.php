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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresswoo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k/Z+Xcnbuf7?ZMa&<`wj6C%XzE{h% ,P6K.Jfjap #/uQa-5?{foSf/(7v^NA&<-' );
define( 'SECURE_AUTH_KEY',  'lVyq{QUW-NDlhXAvj.#eX1v?6 _v~Ptwa9=-~2(@5lt;9fH49~g?,Pj|8UTED9TJ' );
define( 'LOGGED_IN_KEY',    '<4Hk5*avr *d so?-Gg 9 J5uH9`jA{amsGOM|&j;+5P^+IEW@HOVRrd<>+B0t=%' );
define( 'NONCE_KEY',        'a6=Y;L!Z_FXGu81bhc4t?jYNx8ed05GCEy4p_[=qvFlp8]S}edmdzli`U9[.IyFB' );
define( 'AUTH_SALT',        '<q9~ !i$z=9dM@_R7zzV8rr~0z~;`*:(>3[r]*Y?@:,:@mHP.`Pb6#FRDk1x]naw' );
define( 'SECURE_AUTH_SALT', 'h:Qr_2$d6G)IF-``WOdiZG-Ze_jFp.-9MH7w6Ru*~g!}O=S^g:8arnW6W9!EKq!9' );
define( 'LOGGED_IN_SALT',   '.njbnix&P61C#_KNmM6H*TRUOEE1$88E;<|Gm]Ijs$%N*P:)2yzz~z&VNL)0<YU2' );
define( 'NONCE_SALT',       'aibuQw~+Yp|3(l8KH)V!cR8e+f*K2p3h[bmd:6HWZ#*Z,Ix$3aD%&8hw3qM*fk;p' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define('FS_METHOD','direct');

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
