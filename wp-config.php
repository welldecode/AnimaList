<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u555918207_EVfqR' );

/** Database username */
define( 'DB_USER', 'u555918207_qtCzq' );

/** Database password */
define( 'DB_PASSWORD', 'p0wE1cLeeR' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          't)k.Q/rB|TIL%ANRgAmI?aZ3t|6/!FqZ/y(g+@_:zV8YQF9,xVe}P[qFI>yg3I:|' );
define( 'SECURE_AUTH_KEY',   'bAo@LA~Ry(l1_r=&u_K5-#AIPtZWR7C9u`t3+]:e2Q_r4e8G0TfW8_jhv,~#bTde' );
define( 'LOGGED_IN_KEY',     'XJky7_P||F,V;@X69;Z.t5O,@EpnrdZQKQ51<Lb:.A#dCbwdmEg7ZNi5zn)}jG:z' );
define( 'NONCE_KEY',         ']V{(_R7LYr7 3a[%PT.0Gex_:$>H0DKFw,I^D@f?#/QI#o>2Twf9Qj.}c=lk4GnT' );
define( 'AUTH_SALT',         'QQG*3O])}@&Xyg>MYGf7gq7 ,ynJRrELm`@+ioA{|zg0hs^F]odj,>tj_Id?kW6o' );
define( 'SECURE_AUTH_SALT',  '74[gXc-PQiPk*tNu4s}Nf)D`;GH+ExC})TqJ|xM/R&k^T}K v?j/h#38Qg%Ay~Zf' );
define( 'LOGGED_IN_SALT',    'Ivtr9_XTFQ0!oP^rOtU`Q@S!-~Mmz%cnvG9_c9(,PFm.>m]0%0<]R,UxrH.<5.KE' );
define( 'NONCE_SALT',        'oG=TJvmPoVDNocS]%i~`Wo9wil(vvGxmwcyR^{t~fg6du9=tG3v?ACy~$m<U?<XC' );
define( 'WP_CACHE_KEY_SALT', '^cLO[7>%[7Od?KIGZj~2R=, !g&6+4;-ZvWC!!F~nw>_7=y*xT+Xz}-I0MK-yKm]' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
