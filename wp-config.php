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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'WpP*K:t.}iL577?s`k!;;$5S9)q[Hy3V4jP9H<[!|-x -V`~n-jeA-U13ualTn-?' );
define( 'SECURE_AUTH_KEY',  'SI(fVv(t7YF@PF[sief>)16}]Yu*Cx-w}Um/Q!yaFp-}-e3B7@eHb&k;j;D#^Y>&' );
define( 'LOGGED_IN_KEY',    'x8=%*nSduH2 6=5^[Z+#D]5&U0Y^0*uXuK6MhN-ONa,:TDNu`6hN;7FTU@k`D yp' );
define( 'NONCE_KEY',        'w-PTWQ0 XO JtCmiav-;Yl:qR7`0~Fa2_w0~2pSp@af^bu-B2$I)diX#2[qDS1?X' );
define( 'AUTH_SALT',        'L#qgz%`3C)?zEupC/,kT+$)k.x y9abFRh86Cnr$a{Vefx|qZxyUxvGe}|)PH<wG' );
define( 'SECURE_AUTH_SALT', 'B9H/n0Y7WLmtezAM$RjnIWU;NRUK=b=[=pTo|Ii2rS[?r,1]+<V6faJC#9Cn]D)I' );
define( 'LOGGED_IN_SALT',   'sKS*,+JWB({!WK>D*X ~hX?Onog1=r@8>hj4PrI[tNeUB3B;T0[c8aB01u^emuKr' );
define( 'NONCE_SALT',       'E(?.z5cS_z#hCCyhnL~[cU5<+p+>[0MW.iT$Xs.,%U-+S+OTFfY%]zVJA=,0J<lv' );

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
