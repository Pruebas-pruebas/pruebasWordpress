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
define( 'DB_NAME', '1divnorte' );

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
define( 'AUTH_KEY',         'd;|DN[H`9EKd)p^J I|sCAisPcVTR#:l&Z8e3QS [s6c]^ljIOh?|k1_hk.;^4`-' );
define( 'SECURE_AUTH_KEY',  'tQlj5nE>4`x8(3grep|~{a*1)SS:+*+i,.|1tnu/GY]EQf# b6`Vmdnb)2_2>{ [' );
define( 'LOGGED_IN_KEY',    'ly0?]p#Rk7hBgu.XzUFx?<(!Y/fo)FW=+]uU}NFL@2 WWG,*:,GUp:QrstjMZIkw' );
define( 'NONCE_KEY',        'rmQ=8GJebdc4,Vui.%8B/4p=`T(vja6bK_*~#6BRHiB2=jCkZJ`nX*.?&*xm]WT;' );
define( 'AUTH_SALT',        'yWq2A>GgZZ/LE2p *JCMv@]-KY8Xq|mw[xviitUMO0Q&NC+WK](gjI7+DKgnGP0l' );
define( 'SECURE_AUTH_SALT', '6i34.@G-bR))gj 3=_S9>4QK()QtTg}OIzx()0j$iBDW6H7-22VuWR7kD<%6Duo%' );
define( 'LOGGED_IN_SALT',   '6Q:AkQ-Vb+/$I7Lg|gPzn^ QMsq<;F fO+|3(AcrA9*yIT{r366C.v#5-%uPFXb]' );
define( 'NONCE_SALT',       'il6$!zcmU<~JR+eW>!ZLcLdO[ebH8oKg%6Q]*}m]1aaJfk<+Aa0swh9f)dxb[~_%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
