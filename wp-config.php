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
define( 'DB_NAME', 'wp_local' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sarielux2' );

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
define( 'AUTH_KEY',         '}M*JDx:!P}:|h!#Z9Ma0uTzfS R~Rj4KQrf[?^_BdB(Pc&N6%HHB_I:vY~F)Ue<`' );
define( 'SECURE_AUTH_KEY',  '3iDMjAS-cFz&<)];jtPVw1cblY8cX^0 $shp==S?BX4412*V+)9BY`%m+m B25#M' );
define( 'LOGGED_IN_KEY',    'ns]&*6(Js-z<9MTSASKd8kw57  BcN#}sc+>?rh)]sDg@Kwi,bs:%Y.GR;J {gc?' );
define( 'NONCE_KEY',        '-}NB/RzNf?XtWnweb>g;Yf1Uw6z=8Tx iy/(J8b;h+sk7zV`c[WaCAIo%y5MYdW~' );
define( 'AUTH_SALT',        '&:Am5N7%Rd6XBh{;P]MRS9/CVyWy#.,wYioSc*}t`J]s:Xsk+^Mv riF#Zq_xc{>' );
define( 'SECURE_AUTH_SALT', 'm3^&K}UYSFKLa0rE:NK^<C5c[IwZbP?iJ)BqY,KIcTr5:gJ2k_!:zx2^cPeKu{Ul' );
define( 'LOGGED_IN_SALT',   'FcFXo)m%{m9&(#B6eP97?p#xu!`h[NsbwC(4->{//6j&-.2pT<ggttl5^V^0gvGH' );
define( 'NONCE_SALT',       'Aj|S=_<MvWu?x]UcLVyfU[SO@vM(8uK8bzMe2IEo0}P;N>Y]B=u^prVy/%M7t+Qf' );

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
