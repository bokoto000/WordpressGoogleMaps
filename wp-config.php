
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WordPressDB' );

/** MySQL database username */
define( 'DB_USER', 'WordPressUser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NewPasswordToBeSet' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'y2[3H%C|(!Z6U7v}Kd/}&o03,BQE!.dj_,1pC5G4df::uTn>K$Br _(sJGmh:mx-');
define('AUTH_KEY',         ':#!H ` =*yM-*dnA+|L/x$eAq=V*(RG#GHYt$Ehg+&j^/Xvg6fG/c^Dg8GObXTsT');
define('SECURE_AUTH_KEY',  '0.,:2-X9e6c-Dp9;[U(~.dajnRO_wbY##_F6f+Aj:T2([heZ5i2r8?GHk{lB-OZt');
define('LOGGED_IN_KEY',    'DpuD*2xj/Qxr`=yhK|DQmCvvW8+JpOK>=l:|w5C1|hR^frubjfRm)#@,+C9F5:8]');
define('NONCE_KEY',        '8G5|PS[v[%KM/4vmJ =~@#0C:F[Xd;}>R3XyUj1z[iyB4-K*f4zz#F,-xC/p!-E8');
define('AUTH_SALT',        'D=y6x0t-%|80sd-;pJV6k5`<P)A5mGUs@]Cqxf]?Qa`,$T2]$<|Qr7)`Zy@OxYSE');
define('SECURE_AUTH_SALT', '$5PHt;I#,v0c<jr?I)/fpV#>3p$Bw{M;j(-9f?)W?x!E,ObHEwJ!d*l+R34PZ)8y');
define('LOGGED_IN_SALT',   'v:[D]s7xfbwhHDG|}|039`OT.;Flg5ni|;Z4vU,#Wnq/onH:%0I[#IE~w~X[?du^');
define('NONCE_SALT',       ']g/X=wNXF9h:]LG(FwqweE%kea<<_ 5 2RvP@+-Bx6yFbhiX.qhbUS?%]=_<Ckj]');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define('FS_METHOD', 'direct');
