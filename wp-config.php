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
/* THIS IS FOR MAC USERS */
/* THIS allows me to download plugins and themes on XAMPP on a mac */
define( 'FS_METHOD', 'direct' ); 
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hovedopgave_gesundheit' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '#gM-eL+rNbVEBx&5;u|X41-W@Gv>4(GIfw>U%Lrk6=1M7TiL)1V5Z0z/O;7tB4]_');
define('SECURE_AUTH_KEY',  'WT)?%yp?nRg-]%T/+WI)rs&4<pNf2aULL+6f|+^6HwN:^}JJ~OCxsY,eYjI}s-{O');
define('LOGGED_IN_KEY',    '<aj^A{&nKq)$+|[,!$cJo/$*(tH(K!X~hsnbaD`-&XzQ{^8cZg<L8}@d+n%FO.)~');
define('NONCE_KEY',        '(,+,%6tMH:NRi;Eh7XXL%p=l+|hPRy;}6n+i!Ktx#>Ogi:^gHy|3@Ysj*ze9+|<P');
define('AUTH_SALT',        'NB4c^dYE8 d+BZ6D=Eq&7oubqd;<I9S`+AsZi3FJT#IcA:Fn`=N0peSRg`rk0mr8');
define('SECURE_AUTH_SALT', 'VTr)).D@=P`CJ(g3|&ZZbDa6E.-Sp>-4Bk%xk9g-[+%gx~X7Nq<jZN]&^.q%a>:h');
define('LOGGED_IN_SALT',   'SM6~ji9pGvSm+*)PfB[e*L[{HnLkd|pW@($533/pV%x!^<iOApi}L>:VC1`et|jN');
define('NONCE_SALT',       'n|1>OO(_I)hfXc0rrGlFp{+KY?q2kX%s#vKVR@i~#]!XL-BFS!o4IH4b@f5IU&,%'); 

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hovedopgave_gesundheitwp_';

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
