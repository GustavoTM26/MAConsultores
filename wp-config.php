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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_maconsultores' );

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
define( 'AUTH_KEY',         'YuFNRP2]T{g|3T0d+eUgfXAM~0I[*[nChz~a`i7M*OW4|]UEu_Sj0A.jOXMLVe#e' );
define( 'SECURE_AUTH_KEY',  '3}(RDQD5=k0Z:qpFK}qd*z][-8}U+[3G^PJ1zsP#E2H:W<C|>US5c1w#X_92@Z|~' );
define( 'LOGGED_IN_KEY',    '7RRel}k2H+b#H7R,nFL~vRC8UM1VvVx|n/,[H:!a*>wS!2od@gg(x:nS7U6jwvhB' );
define( 'NONCE_KEY',        'Lj6a!/X.ts/h5/mW>SjDeE+Ccq#>L^]A^_Pjze1kWTA+dq>cOqsdlCS=b!JpRiih' );
define( 'AUTH_SALT',        '(ps^b^Md-R5RsEqhXEhtifk%YHvid%=X`r{ h{{-=/=Z1,[o?Vg9Spf)Ma~oMZ0%' );
define( 'SECURE_AUTH_SALT', 'KT=V;yxiwT{B@P&O:q2Wv]gP=)(.7<xBL!+<bWOC!+tnhL{q/*/Orv/W~*vk1MgD' );
define( 'LOGGED_IN_SALT',   'PDQ$VJ$bW>f^v+&IARTb8@f[~]<MHx*O=:gaUb8}wL}<!v`Mkx7eVaT_dGI:jq;J' );
define( 'NONCE_SALT',       'IV|>l09fw&!1^I9=/|`VNDiooH5?.?Vr M%+2NlrYnUV_4b j2dqDDLu}pOV}lNT' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
