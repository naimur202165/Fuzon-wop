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
define( 'AUTH_KEY',          '-`NGNa#:-3Z#%?swk@N(HVK{Vk?9UgNvQ~thM[3xBTL|nBfZ/Ssr^95n.JM^5V{w' );
define( 'SECURE_AUTH_KEY',   'OpEHLJ5v21_mm;WZ_H?l Yt^Iv7qvBFJ@j51~q!k3Ck]}l&x|Q5<bm/fM2R&=/*u' );
define( 'LOGGED_IN_KEY',     'G=1Jr:E+pdq60b,hs?>h d4pP:0zcF-$)Tc:W;;^x-CtHuM|j%`.o&CX~:97njT%' );
define( 'NONCE_KEY',         'n?4%g1XY|>5JK`%5^-t4<qLh:CcEa_^opL?y<YG7SSL$+s`_G.w|t`6kqt}o:T0 ' );
define( 'AUTH_SALT',         'X#3_&j#B}Js~cz+sE/RT:VRPtBE<tA!C+zQ(Ue)gNQ8T#%O{#4l(-GZ8q>@([uMN' );
define( 'SECURE_AUTH_SALT',  '(sxet.7PN>2a*RB_>)@yH]K6uNjc~&6RKU|nh%1 ?M*K1a|HIgYz13gwEwdnaefc' );
define( 'LOGGED_IN_SALT',    'Vc^qbnnH;8SNOtSL[l&?NJIJ)?qY}dJ+PCbUeU1Pp-R>zN| 5WtcP[w;T`EB0.v~' );
define( 'NONCE_SALT',        '5d6lmF3T:y, beQVG<y`k[cp.MMOX$wQgk *}Y.^JSJ}T(5,xG9P#<%^Q1uy+GF1' );
define( 'WP_CACHE_KEY_SALT', '<F{iS;@[)ju[@#lMx5+aNmByVj77l!]ivS5F]|7y([,VQ2QKrS~IO7VBz{!f`#S`' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
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
