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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'U3`zLE(]*t@HRDFwPH3rmF$fa-#q9lEeCIkI]/4]qU{NWo|Fb2JOCfgl+J/Vlx$l' );
define( 'SECURE_AUTH_KEY',  '$*[ENHkTkwi5M>+dg%/B}c?m<N{pU)$$]`BMY)Q_avjaUH9cn}9B>Bw$S3N7,E?o' );
define( 'LOGGED_IN_KEY',    'YQS!pjx<,Y+QZ#8(h{r?<W4SA6GJkhB&|%ryj{/~yXB!NWWaM5Z-6f&UP}m/L`E(' );
define( 'NONCE_KEY',        'dbXiTI@H^qsFXltU%@:/5k]n1W^C[W0AFDIg`4LQ|}c.2!)(`E;)7%KKJAHF>tFO' );
define( 'AUTH_SALT',        'hET~V+8eTP^N9xcWP D :iL:Ix&>`bt)Q`pGn?4)%!3Hga,(Y,1P>DcEp?=_*~XK' );
define( 'SECURE_AUTH_SALT', 'ef~V(4>&t7=2HxJbh{&$D}wr~cU-yw^;$IiX=9}HcHByH2{>+uomsQT3q]xmDj4!' );
define( 'LOGGED_IN_SALT',   'r!Y;i<%F?>?qE|[hYX%(y$.Kk3#F3*zB.<paoi){/8>xqH8DVHBgLDCQXo092EU8' );
define( 'NONCE_SALT',       'xr^.gG89)}s.- /xGjGVl}$uubXSw!:(zkK@S#<S`%3Pj^kb8&5)#yS~nJL i6lb' );

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
