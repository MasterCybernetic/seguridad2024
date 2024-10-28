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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\seguridad2024\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'seguridad2024' );

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
define( 'AUTH_KEY',         'zJF$=OQ$:x;SD#Bb~EN9L8eQMs^d1GD xjMQS e*TY#LL0$+2|_*^0! ! %[)u~z' );
define( 'SECURE_AUTH_KEY',  'EKIu`[`1=p6G xA*=e=QV`m#Ep+-cbn0cz>q.P8Y^yUGf&]5FE{A*)NqQ+G1MQnv' );
define( 'LOGGED_IN_KEY',    '{}@~^PP5~,~X@zM]9D;%9g|8x-G_[Gnv6%PSI{/L%(a<*!{Zid`n[u7,a24tKDRb' );
define( 'NONCE_KEY',        'bV!OFdq,j6o:?_,,r40Ca)G{H5pX-JqUH(f;mmD=h((@nc;Rc;[Th8:xyM[,Wtnw' );
define( 'AUTH_SALT',        '$Y8mKW2%CQLW -_JcF|Kj(Mr)7#>`3h`%yAAn6sBT[?_IW_dcQp0={$-xtHN?!TA' );
define( 'SECURE_AUTH_SALT', 'ebF/-(_o{=4/[0 Y[ 5QBtSsxna8kB2IsBQ5~y%gF<jxkN0%$/Xl<Gir6F*Qi->y' );
define( 'LOGGED_IN_SALT',   'RrcW_ebZdoo%xhMaDV7!MVs|.U#(*bXPZ1llef3xZPOhhA#r%mW%Y~`+b2bK[6J9' );
define( 'NONCE_SALT',       'CeyFP@GP>>r1fmTZydN+#BHA~C %oGmwOZ=wX_Jq9q-2Px^bkepz7Ze@M.9q.DF>' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'DUPLICATOR_AUTH_KEY', '!zlSW=D&u*L$R%wr#zE)w#}}j:rYXF^(b0qre2fe964m bhzX6q(52w]A1nj8i~)' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
