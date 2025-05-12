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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'kG;X(#/V-,Q=sJIAp|/BL4$>&%7A^Ac2];lkk`*wRh|=WfeI=K/- Sv s#[<Gf4e' );
define( 'SECURE_AUTH_KEY',   ' %-DS4M4eHh&eimQ9sX5m>aS:$KGrmqd#d>`bQJZ/-d,WoGf3>ul4^w3;)j6rv&k' );
define( 'LOGGED_IN_KEY',     'TLhoZZYAVuo^Y/@F]0$)rzp<C@?Vbi*v)FE/67(qqF76H)0cjF>|-Y/U,vZQiF(2' );
define( 'NONCE_KEY',         '&E69vn](q595;4su2Wmg<Z)EorI7%5-4SPZn*iY5`Nu5(B>&6z=+[#P]E/iifo.9' );
define( 'AUTH_SALT',         'E2cNb*EMrC:td>6m.!uKRW_fF-/d%G86F?W=|p|GUuSgEaR$[A2afq?*/G Rg1$F' );
define( 'SECURE_AUTH_SALT',  'q0$~S57I`xcuq&@fMX41<0/=nF*=D.v9>xyB9r[WKOnu3gE])K1wXk]w[)v)D=Rp' );
define( 'LOGGED_IN_SALT',    '/++B(=ZPb;%)O&PtT+/%j#p>RR0dV7]:7pvV@Oe,*`98~sxB>.5`ni)QJs-i/`OD' );
define( 'NONCE_SALT',        'OFH{=m?.6M-{YPh eI2jFQ^r7syGd%Q:-4&C(|J1Kc~C,E^D%Uge@|SqB}]d!()@' );
define( 'WP_CACHE_KEY_SALT', '+b~MNHS)28NizF`~b96R`;)YwN?Y*6Ca%BJai&PRS:|/DkB9[6oWD#;@I6^@( *6' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
define( 'WP_SITEURL', 'http://sample-2.local' );
define( 'WP_HOME', 'http://sample-2.local' );
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
