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
define( 'DB_NAME', 'databasehappy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'x/#,yN7k>2NUX*2LgH6;{_,wS(H7&~^Vo@_l%2bZ-YeM+7qmAPN>Ow<O6jSFF=tG' );
define( 'SECURE_AUTH_KEY',  'T/{GRt}.0yc}Ne<Li<V[>`b@Rk=a[#6=&#F0J8lg$h[oxc;+tJybeeRyW0D_M/A(' );
define( 'LOGGED_IN_KEY',    'JTjxdx@kV/&B9|Pl:01?Z*_=<1<$?|yJFZjWN8M&X?YG#D26XkNFP][J[@W<vz3[' );
define( 'NONCE_KEY',        '5wG`gY7M8l~5n0EaW+|jW^!zcjoh-!h9H|+c!9VnZZP50H3{g9dzHL>l>jk66)f!' );
define( 'AUTH_SALT',        ' heR^o!|2{Zx~eYUs[[d:3La5YuEsud(:}*|wh^`)o6[,<_I{k^>L/u$AMA}0}QS' );
define( 'SECURE_AUTH_SALT', '4C:G|ry4ZM/9XL3%.E!Hp`?!(rQ9:6.^cssMf}i=%ru`t}ZNi /UUA*2}9jZNw7^' );
define( 'LOGGED_IN_SALT',   'hIlJnZ3)/oQ%,xD ooKn B&NTaz_V4N7|Z:Gv`yksIRRZOg**29Ug=N,o%rM:Xc/' );
define( 'NONCE_SALT',       '5r}SOxm]>4Huv%I%PAtFF#Sj]/-;<:U9KS}n-@.J7Jo<PGq;_;-8B[FgzF+PfKuo' );

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
