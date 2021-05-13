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
define( 'DB_NAME', 'elevated-ed' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '/e+m|4hZ3Q2mJA/[R|tNBDIikZUWG)*=jhdA=z@#k^n~,>:X.lw?:%k0z5cyh~Rh' );
define( 'SECURE_AUTH_KEY',  'B1S/89c6KVZ%_xA8Za{2PQLVAV9Nu<t3@Nc&jvPZZ4KFwHg4_BzQ-yJ_*;K#dP@W' );
define( 'LOGGED_IN_KEY',    'Ts>5h5qL7a)t2vqpOWy)c$pNZiy&~=gDFLD(yV;v^Ym#A(]OP_WU3(uD6y+{2j-#' );
define( 'NONCE_KEY',        '~9pU;g9Bcq mA@`O!?n/nV)y`g<%.-,U`GF&~=>$IUIF$:p#~ht-/C/@Wn,%NoQx' );
define( 'AUTH_SALT',        '*CwtIA2,oO|T4,.EFwNv:A.R0bJw+urhcZ$ZjdJt6YSr2f5>8WSt.>MK.gG>8:Qx' );
define( 'SECURE_AUTH_SALT', '%G{O_s]z+GD7$If;#eLb2h5jdq@+@ajG&B-ZI&ZU#SXMZ7Uj@,:W[Qxm)8iSMi^k' );
define( 'LOGGED_IN_SALT',   'c}No<&g]-*q21s^kuHzoA4x6H.oE;drCI$?~*.cJ=H{Sxod1gu;&k~DWi:/*/(&3' );
define( 'NONCE_SALT',       'z3I6txbUYTP!FT6n}$Rf{CwYI=%c_@P67>+lM#m9-3tRGK~0]k7`0VV]|!jUYSzr' );

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
