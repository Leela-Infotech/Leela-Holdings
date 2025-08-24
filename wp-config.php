<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u364876456_CtBhG' );

/** Database username */
define( 'DB_USER', 'u364876456_vGAl7' );

/** Database password */
define( 'DB_PASSWORD', 'MpoSnXaJfG' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'u%aV]YzQp_h:.{|#oHCrxHb6&y&RP>eC2yPk-<e=3b#l*EjG8/ ~6]?fdXV6-)gL' );
define( 'SECURE_AUTH_KEY',   '>*~Ume7Ac$#[5h,Sth*O#o7Kl@zb9RzfW|sC&rRnTD;aRu@0J.d*$)Yp}/ai?3W@' );
define( 'LOGGED_IN_KEY',     'h6jP;A;*E=.WL@5X]g]OEgb>4QfKCU@m }jusf6{sd[nKCuwx,nv;07!,s2<6Y,d' );
define( 'NONCE_KEY',         'E<9 zKcp5x:!T04QGk=SZ2(fz|f,Pj+}{5$[Jom0hst,LP6]ZYvY(Y.1ZuC2.SxU' );
define( 'AUTH_SALT',         'od9Nt,VBGTg:@},er/mf&yw>zBGH{[|B?$5*-/q,zH~xi#YSKG8jo7SgRMTF4@zN' );
define( 'SECURE_AUTH_SALT',  'x4QRO/b,(x}cO0#z-W.$ywktHIc|)9=Kjb2v`m&KWp _<)A9=-nT+rHU9idq?J95' );
define( 'LOGGED_IN_SALT',    'jM2! A80:R-Jh0e]5}etPmhBxGTDVyl~Q3^s={~O|x*~l(~xuE?L-ZoT|[5/Fqr6' );
define( 'NONCE_SALT',        'GHb<FZAd702.^A~`3Y}Ik903a#?*?cg^-vVs$@Nn+>?]O>p;)@0#7R.Ea<nzIzYF' );
define( 'WP_CACHE_KEY_SALT', ',!]_%=rltfCN uKl%j#5;&W?AyAHZ;$S;&XXjTR{ P$4pd)6`gqH9vX WMT`JH1Y' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'f2330247e8085cf8a5fbb5a98f409b7d' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
