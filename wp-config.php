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
define( 'DB_NAME', 'u134338010_MxEHR' );

/** Database username */
define( 'DB_USER', 'u134338010_pgPu4' );

/** Database password */
define( 'DB_PASSWORD', 'XByqdYC4Om' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          '=%<.oE6rm}#>LN@KDb=e{]%N,A`BuEUFx:4jsAv{MEW,:/pbtmx_.#^4P1#_{ ^+' );
define( 'SECURE_AUTH_KEY',   'PXk%rL$2y0:ZEl0w0!J_Sg9t5r},RVR[o7fNWZZ%|:<C>l7r}.l<+#(sw:P)NRYn' );
define( 'LOGGED_IN_KEY',     '9_fFtFpfm:Pi?HB8{qFL[uLUFVDWUlB1-y|NO7d$$o]yIX4a-Q=%lrMYz<3l1rrm' );
define( 'NONCE_KEY',         'ol(WGOB1MBZ}pm}>TnkUuITvGws@LLO*e-:{R,R9rUO]+O/(k7}n&!#?fGWyU,2=' );
define( 'AUTH_SALT',         '{A$h7;<IH18@u[F^ f1cM]X1Q^TQVo7MgT=AI$}pyp<DN9v}7 LeP`m5Zr:QY1=)' );
define( 'SECURE_AUTH_SALT',  'SV_k-JdWB3eowwrFw#@%JJJAl`9`$#h_hTaha@$R%Glv?iBM<R]S31!mBEVgx0aD' );
define( 'LOGGED_IN_SALT',    '+.KP.w$&{9a9&u)h2m0}HpZ2$pN)_rh52?}=d4V6_M)HG@Pq_#JnDL`{>QawLN6n' );
define( 'NONCE_SALT',        'miS>gKCxeiTN+-;oLHci<ncimT<)eJ/pJ+m,?v5D>V`lS:<Ni}-yF`)ugVb{%>G`' );
define( 'WP_CACHE_KEY_SALT', 'PK{/6j@(}!colM[uADArotr%7R/*FIYAqKgXu8/K(&.)Z3|f{/o>^Cl`VeiuK{Gp' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
