<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'LuC,WlR`q~sx.WOPX%~wR CDvNQJ$gqiXeW$5m;22kLT6[?Piz$A87T{o n0a,n{' );
define( 'SECURE_AUTH_KEY',  '7y6LvPpB@ej]C*qtsA/%$/{32+4vW`XP05<=d(Xt2m{4//APQ4[IqsiJyoBS-$oc' );
define( 'LOGGED_IN_KEY',    '*HzJ6!i-3j#uPTdpw)/0vke9{&D.nI}am{kmW(t%7vl@/$}$xsl!1c=A*=Nb,pmb' );
define( 'NONCE_KEY',        'uQ2eV~Fg&8q4Z-1=$6u_toKRrq~/wA{`OZq^/f(3z8):!)2f<-I2)sIXmdO5j/W#' );
define( 'AUTH_SALT',        '&:o;vrOr2_gD2#iR!|0{-oA<r.bFi=E2:Z(`FmD?Ud`{?4;H/)v2h%mplvha^j5G' );
define( 'SECURE_AUTH_SALT', 'g*WY-Sq[}2)EY!+oEGuq-@uwIH?_+ Q|#96~59?wA5p&0e<KX1K*J&Z&ywY5Ev{A' );
define( 'LOGGED_IN_SALT',   '~Kd E?i/00Rs>(72CsoZ ga8`TnGv*kFvb#5I0zL^,*!!uGKeH8S|}t:/_mETHQ5' );
define( 'NONCE_SALT',       '$0dwsXaZaS<#;{P:<=FucY*`wV(9sZ9jQs|DBG0(iulodrjvv/W?FxXMI+VA&]GT' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
