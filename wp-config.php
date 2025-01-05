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
define( 'DB_NAME', 'o2co_db' );

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
define( 'AUTH_KEY',         'A8egI*Rn@H*un&1fh- T9}s=Jx>t}8yc oI%L`gUu!|HF%vgPH7GT!W75LGxDCQb' );
define( 'SECURE_AUTH_KEY',  'setmg4j}bom6|wi0`3{)#5KH^382X2WKlg_|oPyt^sZwSJUg#-1M0r2n$jtIkFZ|' );
define( 'LOGGED_IN_KEY',    '1F-Jr^%%,1V#4Z5&~4{- U[p^kR[PZ!)tE8 sJr4nc &kXk;CW;>:x4`2weo#[ZN' );
define( 'NONCE_KEY',        '*7=z)PlN~Fp nX8-49nLK!!TMX^&#J,4#DIFz~cB`&ZH=4P^:tbN`xo<N[YE3&(V' );
define( 'AUTH_SALT',        'g(.# ceMO+6l<n(HhN</MrWYj6A+t-I#*<KMGvVQxxosQ-3rpGGkY +g)ap=n3`v' );
define( 'SECURE_AUTH_SALT', 'T${f>]YdsY`ei4x]>[G(/~@HsUDCZ./<n9-$,6sYh8~`36N/ dZ([Pr=MJ et9ly' );
define( 'LOGGED_IN_SALT',   '`WU_U@H/*C7cZz|9suZZMh5-bVsKFpgVwMv3R)SUwv`%Ma=0#ju_TlEfW<0Y5!*0' );
define( 'NONCE_SALT',       'ed<~@i7AFL`oBnT[qH)>UjH*X8Ip+,]RRF)NFMhaUQs0Z[AA{*EWG/twk/OsUE| ' );

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
