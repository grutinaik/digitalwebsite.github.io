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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         'PTfo.l8mO9LU=k;^g^V*PFr/BybziCuKzs^XwB]]|zzrOo+dK 5Pq_(`,@ K*bv{' );
define( 'SECURE_AUTH_KEY',  '3Q4l++ >l;OpE.ZBGG9L$Nv)7J/47M^>g*=/Ja>eQaKyyPjE6IgB#sKK#EG0dnts' );
define( 'LOGGED_IN_KEY',    '!,t1<H&}lWiZvTd&elob]XUKYYVU16Q%~jCi:8^ T*%qvZFy,!Pg/3{F,%ckzl{_' );
define( 'NONCE_KEY',        'd0(*93s!owA*MoE>@M}MF8%yc1KQ#PZk|&K1d p8|iVT^1yf+RRWkcW=@wuw_Giw' );
define( 'AUTH_SALT',        '4Wljj1f)LjF,F{e**?XBhMVZ{]I^>!hqW^V6x^t-*yUrboVu8cENl<YuQ3oPcUHM' );
define( 'SECURE_AUTH_SALT', 'b4NP?!-9>]IR@$]s?mD|1qBR9CO@S,lA,greXH9mtb6p8V;,~42r<}&EsIcEK9CW' );
define( 'LOGGED_IN_SALT',   '-ai1cq0$wilO99t*xg;z=Pn1LQ?w=])Je({C>{fqkbIqC6`Q/hI=Q]3L&Q4aAlJs' );
define( 'NONCE_SALT',       '!k-{JcM~$Xy0_]^u+pvC[fpRm!8/.o&<~}#<bkk<{oaFFD!BB4d$ #^7gG$NT}Q.' );

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
