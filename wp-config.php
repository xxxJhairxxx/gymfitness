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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         'd:<q_cEBb$7J.UjG0&A}AAD4IAD!2:&=*Qe7.p~!(oZd|[rP;sY:7bd-mU8L(6+}' );
define( 'SECURE_AUTH_KEY',  '*Sz2;YuS)0y:kARjOkomY<pt>KT5{v19I-eLtIKl= &2,~6)(sVuoI37IV9y+t$C' );
define( 'LOGGED_IN_KEY',    'PqaD9%#Gzq31kp2[ EWhW+bXh9/LU&v[@Z>t)a;([[R5{Yi1|jb6oT[>7o73fM/P' );
define( 'NONCE_KEY',        'Ic|-h9^~)7}~ ;Qus~lv9N w&N>(3B:O)QV[<h!4.^;n]OlTEDJ]*7SA.&dZ.A`}' );
define( 'AUTH_SALT',        '<sK_#~boRfTGO=.5!!f,%/7~q$}dwsXZAIR;&^@lQk92r3tk(k/W3S~{s %SBPAD' );
define( 'SECURE_AUTH_SALT', '6mB1,nsNNu`D>jZ.zvb= R{n%8|.iP91h|n[N#B7oHS&17DJyw/Jj< p*Rm*BE$u' );
define( 'LOGGED_IN_SALT',   'rG(lJO_B =_%m7ov.tFT8*IQ%2 ^xYIs qkwoQ`+()8BE0Eb0:~Tc=YSi:5o(]6p' );
define( 'NONCE_SALT',       'T-Lk/!1EyclFCvg OH%+C4^GT8/WMx`zWR;.F{p[,!%wXVtTq/o+K0hJ+GI<70H ' );

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
