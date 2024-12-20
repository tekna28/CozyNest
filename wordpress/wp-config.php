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
define( 'DB_NAME', 'MyDataBase' );

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
define( 'AUTH_KEY',         'p!V=Pz=8V1*VNyz0aF5PtD=4Vc#-k$MX<cs08P8@lA%j4)|^Po_]jWRIS&F?aS?A' );
define( 'SECURE_AUTH_KEY',  'CCL<C#-bZ=7%)nN~+ q3,Pft<oTn4514hh!?klha>yU`w1$:xC>oCVEJc7dL`2!2' );
define( 'LOGGED_IN_KEY',    'PKo![9;xwWQ+(d)>v~rBl1,00.,^|7B;EWinbYVw5M&%*CoXrrkTLL|RdM,N!M@-' );
define( 'NONCE_KEY',        '^&ib^#t dj-qUHR)T3GR=(PkUS;ifkybl~3l~O/!!#5G`$~A@FFMK#1Ri3y6qcP4' );
define( 'AUTH_SALT',        'Jf[t^?Ed9o7Z%di[*)R3}!m*+o*9).m/h*L>|wgT=@7/3&@[e&2/Q<^nrYtP!Cj{' );
define( 'SECURE_AUTH_SALT', '<=VCuAh5!3k*+7i/PAwBZYaE~|~J9DM$w|6uXzZb}~0CM3}^Cbn4]osmb!5bGYDa' );
define( 'LOGGED_IN_SALT',   '%S`$2YSbGMR5JJn@!M[5L>@0]`;(e[qfzq%]s7?!gP0oy4#)SYo1`se_J^gE~i2#' );
define( 'NONCE_SALT',       '/}f!WfSy/zz.|Ex&7]XR5?S@[F<fn`i@_4R@bg{dd5EtA6e*wp37}<mUQ(@!C=|M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
