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
define( 'DB_NAME', 'wp_prueba' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sarielux26' );

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
define( 'AUTH_KEY',         'Y[-Kj>$s?j#::,,`]ze!3L$1*>m+O=%L)G8=%)yaiGSv5X&gFzzCpz_>u+|/oLLb' );
define( 'SECURE_AUTH_KEY',  'eE@b#;pqs27;zTxSLCS92%Sp+j!&5g0]L~-(35Tv%hywCjkGm%oSEw(RK<&O7EA0' );
define( 'LOGGED_IN_KEY',    '}F;Mbz>P/AEM_?!C<t3/1RE}X47QDnrw]YrEe6-Yl0c}Ffgsb=^_$|zV9Ce+s9E$' );
define( 'NONCE_KEY',        'wtX5b}>V/Udz9Spetkzs{|`Yr]|!{~:S]U6Ze 8Iw(=yeQka,L|D:5j[ }c9-0Os' );
define( 'AUTH_SALT',        'F4p)?z~~@=;1?r197n0b^b_nq5gs% ~Kf]pFSz^wxvY7%(RN$yBbW}iwPxwzuIF~' );
define( 'SECURE_AUTH_SALT', 'wN^0|w3*}76hU9$p/&Bw?Lc%wLa~sk+KO4O<vmLfx7r[3caP%a@88x1Tbc)bVQT_' );
define( 'LOGGED_IN_SALT',   'A@TUdDzIy+Q*gS)w{On+Ob#cSe;uRFnHqN2~;4o1/eKWJA^RwdBe[1#UD, =x)]i' );
define( 'NONCE_SALT',       'jraupEs,gn&M@,S}nSgo=gEV7{ASjX#DihA0R~K#T0!Yr+Z+2]ZdeH_cN_?sxWKy' );

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
