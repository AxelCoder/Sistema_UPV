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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sistema_upv' );

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
define( 'AUTH_KEY',         'p6X{O[5W+r:4+A7]5G5(uNwDru(<s3:NMtE&l4vMn!Wmp?GvQ^?Y3BjO(TeC?<*.' );
define( 'SECURE_AUTH_KEY',  'Q%MCeESsUg<%!V 0-@sAcNZ#kOBD23_MCPP;}%NFj=;tv4^AV@QC}k1K%9rM8al{' );
define( 'LOGGED_IN_KEY',    '8D|%(_QUY>_<Y}iJ#,9ovGcE.$A>$gN8u@eT9HxMzja+n2#U% Ghbsd3+K{l^t!U' );
define( 'NONCE_KEY',        'MkR}h0>LPj!_PbI,-_[iGjpJ0e4J/_~9Ji>==Zw?/yln[{w[QA{{l:U/b++Fqvm>' );
define( 'AUTH_SALT',        'XHQhR$L2#r6A-!UbW0cZ-sYY^A,0Oz5 [AzYwmU[/Bt{7]DY*(>HXCZn0<GI}`Jq' );
define( 'SECURE_AUTH_SALT', '-nTx.C-X@jo@#ZId=!s~XAcR^u0MA8Sb<$#]U[ieN @eT9F{b}yGiZ.gf~@LAqV3' );
define( 'LOGGED_IN_SALT',   ' X^7A!=cdN9vA;?2<2-Ks1a.48<W? A!1LkrIaK.$(V,JI*^YF_0r7HFo^4EYsNi' );
define( 'NONCE_SALT',       'd9mbyN xEz#oGt0KMTCueD_zl-|z#x]uk(O3fl)l+dP~cKo3$>x;reoVK9DM>#hK' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
