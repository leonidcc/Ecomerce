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
define( 'DB_NAME', 'ecommerce1' );

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
define( 'AUTH_KEY',         'z(1OS%wEY+qI3(e^x5:UEIjQgX[j}NOKi*`h2CU[4ov2K_kx[X1TwR?faRQ~Ny1i' );
define( 'SECURE_AUTH_KEY',  'RD{g;E.3]_[9iN~=%[vx/@NXde6@!xug=cO|p_JYV6EAF*9Pi gmL|BYxU&)R&Ij' );
define( 'LOGGED_IN_KEY',    'Kz5auy%aA`Jc2IMT(n:PnaacnPiEY-cj!}V[eqaS|i!KmaSP~z!fM!wMYSh7Ud2-' );
define( 'NONCE_KEY',        '42k+oT|NANJ?L@`;x>tb/=5sLrk91b9 N/vY}%i>u.,omgy!6Z{.c++uqm:0 Scg' );
define( 'AUTH_SALT',        'THQRtr_m-gq(Gy;gpU;#h?2=vi@r}4HM]6^q14*8Xm_{Xgk&e4nH7n(~ELHIx)nr' );
define( 'SECURE_AUTH_SALT', 'y>L}3fv,[U~0987.yWxbR8B8A)_qJF$#3kn<q8D<F#hayyx+h#ewd(K`PH{hs+Xq' );
define( 'LOGGED_IN_SALT',   'R}-_6wwa]<)tLAryFb%lqBZT=LH{~s< 8?O^}jIDFZ=|^rKipr;#z?u;UIU,DzAO' );
define( 'NONCE_SALT',       '%iW>5u4mD0f%l<wlIu7gK-3@Xt52`0GG1pV9aKiiM+sVb9X:mrzYSv61&AgpJ1A[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ecomerce1';

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
