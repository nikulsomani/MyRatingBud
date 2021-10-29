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
define( 'DB_NAME', 'MyRatingBud' );

/** MySQL database username */
define( 'DB_USER', 'nikul' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Q!=@bVhfzST' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_HOME', 'https://webbygenius.com/nikul/mrb' );
define( 'WP_SITEURL', 'https://webbygenius.com/nikul/mrb' );


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
define( 'AUTH_KEY',         'D.!L_b%/!um$Nd=9g[7M 6rX].p-zdMgds+N|>epG|1+A9#--;:kln{(FR@/U*yh' );
define( 'SECURE_AUTH_KEY',  '1e_}##{a5M6AHJ~2aM)Q$l|u}t9|]kbSOLs-j?h_IH<vG=al$*U+v6OCN(O39&%5' );
define( 'LOGGED_IN_KEY',    '4*HGD9F,!+q{aDS|apb}poJuqo+yMFM:tq/DQ;T2Gti_-l/T`]Y<iYvY-}1HV:2W' );
define( 'NONCE_KEY',        'j<qds9Fj,J|`[_ZEw-v(KR@2m?sDn8_*Fu=Ul2xYE^(U^ty@d^3Xf#!J9ltE?3S8' );
define( 'AUTH_SALT',        ' <l50jX*UDl+=F<Q4SQ;$hk1(qYD, #=>QJe:oS@_QsG%&&ykw}b3<bHfu|up3Ia' );
define( 'SECURE_AUTH_SALT', 'xgvq*-q6uD6|I&QoCgO[5zv+xS_^hQRNWe2g6X)Bd+4b0FA~$I`0nAmW#@_V1>b3' );
define( 'LOGGED_IN_SALT',   '5iY{=zY0JG@?7JP+z@:%fOX.2fZ-maN%l(G)Jt`*i#=h9~C$>?v?#XE;T6mQJ.iy' );
define( 'NONCE_SALT',       't,Knoo{D^_D~q;CI2*u>DP`Rg|)T_j?1$UE.eh$fBQV,cJ/oQpXH|{3)71wHy% ?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mrb_';

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
define( 'WP_DEBUG', true ); 

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
