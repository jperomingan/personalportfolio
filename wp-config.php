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
define( 'DB_NAME', 'personalportfolio' );

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
define( 'AUTH_KEY',         '1+wQPe%PD!R%{0se7oj<6:Y w$E<GP|:b^I$z42Wbj$%h%Cj?SlcLF5*s*-;@[zX' );
define( 'SECURE_AUTH_KEY',  'LTC{a|Lj[,q@l1&Fx?^Xr6K/&n`]NP(SrFQ?@7`:qeZ/2[]0N{}v*6;,oaaD[~rn' );
define( 'LOGGED_IN_KEY',    ']x#mgcc2N.DPaT`c4xFmj_Ti(t0oyc3_hgY+8, jf:DJ.-uy;T1(6!GA1oM+]iH4' );
define( 'NONCE_KEY',        '<~(?]xGcgbZ^^#gve41p8*t1bSb<H]f*de>RSg[lKu(WU;UtlqiK9gJ%yv>@sBYN' );
define( 'AUTH_SALT',        'L(R<4QCZ;h-yv(JAN[fnIi!-n/8WCod=a`[}iqpY/L`J80$|y{8=#6QYslOE^T> ' );
define( 'SECURE_AUTH_SALT', 'B=X1t%JbK,}H;Wh&?370!<YhY&;bD-0Ac_8@G)Ua+m!s-8T=R`=WHvhX#LPSi*wi' );
define( 'LOGGED_IN_SALT',   ',CV-lA-eA+JCXAw._Cv8Zd`w8NUpLo<db44a622E1+D^I<KN:r5?Or/+u( .K|V!' );
define( 'NONCE_SALT',       'VYIy~8+7P7Oi7G8(kLew;t;5PB(Ec2Ro~,ggh82n$}$Qs4NfB&d/=,D(U|V#7$V,' );

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

define('FS_METHOD', 'direct');
