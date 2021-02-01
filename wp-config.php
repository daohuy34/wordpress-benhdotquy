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
define( 'DB_NAME', 'project_benhdotquy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'r~CO6uI5f{8S1$VXTgU*S^Hehy Sx%mB<uk;SN1R$hVy{&dwfrLD*X-:R?&>q0Km' );
define( 'SECURE_AUTH_KEY',  'Q$bhc(P82Op>GJhzd| mQ7Y$TJU`WCi<Q}|l^fcWJLMo~)ER9%!XwrzHbG9iAjdG' );
define( 'LOGGED_IN_KEY',    '2(oL8-Olv1di*ljuV-LbnJy~m#sUJ}Ct&i%`/[<W~-dA5BLhu0RClRmrO4Pb{ptZ' );
define( 'NONCE_KEY',        '.GOasq2n8w8OIc%$l&CAc(YR8~`mw=xc+g$ANCu.v/F@93MhG20cmo*-z94{6uBT' );
define( 'AUTH_SALT',        '{ILibbu)/<a-~Kdyy=VR8ppPv+(RnKK}$?v2V?dgjl)<hpfszxp4A8BRcKmqbCfC' );
define( 'SECURE_AUTH_SALT', '6_ %)um|R~95ew=b$09QBc(Gwxj6BmfTS=R<T4|_c^&blXS*9Q7j,GND Uc!8^/L' );
define( 'LOGGED_IN_SALT',   'ngB|MzM+:3kUk)E<j(F8Y]9If_cb1XNYIT$9*IS]Xq{i4[NI&+z-j?@$|V^~RrOw' );
define( 'NONCE_SALT',       'XamQKDs9>xGH}~An_!tiQ3m4w<bFH^Kswup~70></l!m/dj9 !AV/S+||bPKFy5}' );

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
