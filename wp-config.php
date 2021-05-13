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
define( 'DB_NAME', 'myfarm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '(pspKay`P)$o<7aGV/UopdM}l0>=BUq+h5c}HG9w%xNb>Wr|d]~K0sN22(7?r%&*' );
define( 'SECURE_AUTH_KEY',  'D<iP{~/1bYxyaHhQ?Ql}Aq`FV?f^AXQf*kkI:>,t wlSO<SD<Xf<,(>+z,M%+1(e' );
define( 'LOGGED_IN_KEY',    'l6nni@h u(^Uc(|@xsISrw_eRFNVDF~hUH^,]WeA,Pe(_x<#AuJR^ocUfqIzVsAX' );
define( 'NONCE_KEY',        'Ez,C(_$+J1=5H>1t8*jwP#g8FWA=0kt72/cpe.Lk3At|e@5sULbt9zJW`E.iE.Yc' );
define( 'AUTH_SALT',        '@)k0ZZ:[eDg+Rh+NjphnYmoraaUt._3#QMCRqLuTF@`c5|m7c+UVG ke0^N]4;7p' );
define( 'SECURE_AUTH_SALT', 'P*1}>Ig(uRAr$BW_>R%@+6=SDsCpVuG04$gP+E[|W<qE>A:/s?ZevBoC|XZ@eu9+' );
define( 'LOGGED_IN_SALT',   ' Ki8?^P1|*h$Zdx7{Y)NV;.AP!H]o#uzoO]mr )DOepfz;Y`SxW `8i|eWF;]/bS' );
define( 'NONCE_SALT',       '.Sn-E#.|6R$g=QX9SPx5`-FpwLBZ}zPn<Cre8F,=](cGA4sUa%V#KmtP8v]%B5TL' );

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
