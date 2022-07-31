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
define( 'DB_NAME', 'mfdnyc_db' );

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
define( 'AUTH_KEY',         'phhA1BaQ/oKA{L+TBaNj_3N=|X&<m$I~Ds?x+Xi8IG{ki@YVl`sWK/1qCAN*fg^z' );
define( 'SECURE_AUTH_KEY',  'dZ7a>&>PUGYyR6R_|hDc`Hl$I#z*w#%tN7/<+f,V0u}>h*)W]=;+Wb.fvKdola9W' );
define( 'LOGGED_IN_KEY',    '$d+~OWc6@pHL%E[OR5!Ss={F,?HmgihbO;{C#25@i)nMIDc(c-s@2[~l+h),6FAY' );
define( 'NONCE_KEY',        '>qPI_#J9v{,IuY5G0)#3}:3]SOn8x$0}Qm3Wp|xbuKMzWD0Wj?)1d!*&Lwh,C|Wp' );
define( 'AUTH_SALT',        '|Eq&/Ed#S]`UI64_i$p#@.T4wW-eHGG7MctKVds|BVFS(wBiztt6<>VfJZA39:zq' );
define( 'SECURE_AUTH_SALT', '#K&n$=njm<QKNj+[w~Kl]9>9J/{I9@Vqpf]v8.C?Fv=k6:#K[FX5;;&%&d~2(tp-' );
define( 'LOGGED_IN_SALT',   '^^k{iAzE7bDC[LPWjiPqCJ,Nl[A]}A&E6%dA?(@EzdGG,7S wyLW~@E^)LC_%z8v' );
define( 'NONCE_SALT',       'K7>*<+&+11n& YjhToQ>#3~i?<:LyVnBUoP6e|87#eg2Y~5smUmn#3`k>co6JfmD' );

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
