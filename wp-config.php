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

define( 'FS_METHOD', 'direct' );


// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cacheverse' );

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
define( 'AUTH_KEY',         '7m9x~HH`D~P])r|*0WK]U`s4Nc:<=.IUkg;wxfFN@YCtvnW#K[U5<:BUATI&k(!u' );
define( 'SECURE_AUTH_KEY',  '+m`G#6*5Wo;`<]2vfSbBeU.=vXlpK-r?uL`>p#B+obVtAG(Jp5?yLcfJ+3TOp;ow' );
define( 'LOGGED_IN_KEY',    'WZ)?J`W1xZG9c{[xr{(3>EbVw(1L4YK7(Dk[iUth798Q?KI6.(buHrXJ4G)KE @*' );
define( 'NONCE_KEY',        'vbw*B&VCe|#XO8KTko[R[<SQYf/JEQKn(.V#A&seS+{I3e|sSr{0~#eVEQ}= ,tQ' );
define( 'AUTH_SALT',        '7/qI#o;m]jLS}8RTl9tf<22N$9k_Dz.+63,Hq0!E$st|z,-dnt9Ox@9r8jS]%xW8' );
define( 'SECURE_AUTH_SALT', 'MdxK`$nP9;XpeuA2w`2eGi7Gj)}U)fXE|/.OgBma{f[$)>G)m)mUPFYQ8IM dG-#' );
define( 'LOGGED_IN_SALT',   'VC`c&]:8X)G%-~]m>1H_+tEaRYP}D1SMO)`@4^_(a/ 74gJLP=C,3!,H*McdCdA/' );
define( 'NONCE_SALT',       'sk8htG)/oY]y-X{{-.5T4zq#&L<6;~lMcrIL,CSF8C`y@[?Dkf:Wg%Ner 45t~lz' );

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

