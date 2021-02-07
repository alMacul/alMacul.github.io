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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_reboque' );

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
define( 'AUTH_KEY',         '9:K!O^n&:i$Dj=uToF?s4HaoDs,Xs{e!H}}/19Q@)#9I%k?lpSsmZ(WkL:m5T2FD' );
define( 'SECURE_AUTH_KEY',  'A!ppBJAgdNW,g+GuS[$_.<>wE9gU^4fLmjjL  L{,KC<>ZFu%p/xX+:;B,F@W pS' );
define( 'LOGGED_IN_KEY',    'Ir@z-wE?6>1#El&1!C;I?{Z,uK6=3jM_Nr]a*KsUqY&C5b)d!xKntP-s&z_0mK?g' );
define( 'NONCE_KEY',        ',BftK*hCVPX8P2Rm}Uy{ZI1m:&3_D)n.>sJyigWe&>hr}v_Az_vkR a@6@Q^/`_0' );
define( 'AUTH_SALT',        '7%+2!boy7I?1aqFk?)uZLCrZB|GIFbg,?~__.2r]5}I-gpwW5OO& J+m;743#oPV' );
define( 'SECURE_AUTH_SALT', '?y5]/%H.C:@]:H>ySDI@hGBK6%`he{o*+{]ss6.p5M*7S<]*RNMo:-fZ#+= Oc[v' );
define( 'LOGGED_IN_SALT',   's+KWla^#O H+Tm)p72i^&b^<{{87-lj1?:]D0sNtl*T#:La-_Orzj:jV3|TP@Gyu' );
define( 'NONCE_SALT',       'p>>6M$`^QN>-cnU4N4DU/PP1(]Slz`1R<a[Sb/CV|tJ`{]W=1;*|rVi(1=V,h00L' );

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
